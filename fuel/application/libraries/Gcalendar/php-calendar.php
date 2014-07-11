<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
# PHP Calendar (version 2.3), written by Keith Devens
# http://keithdevens.com/software/php_calendar
#  see example at http://keithdevens.com/weblog
# License: http://keithdevens.com/software/license

/*
Changes made to original PHP Calendar script by me (Ross Hanney):

- Renamed CSS classes to fit with my plugin
- Slight modification of lines 63-71 to use Unix timestamp rather than day number
- Renamed function to prevent conflicts
- Replaced strftime with date_i18n
- Use of $wp_locale to get weekday initials
- Replaced htmlentities() with esc_attr() and esc_html()
- Other small markup changes
- Replaced gmmktime() with mktime()
*/
// load codeigniter resources
function gce_generate_calendar($year, $month, $days = array(), $day_name_length = 3, $month_href = NULL, $first_day = 0, $pn = array() ) {

	$first_of_month = mktime( 0, 0, 0, $month, 1, $year );
	#remember that mktime will automatically correct if invalid dates are entered
	# for instance, mktime(0,0,0,12,32,1997) will be the date for Jan 1, 1998
	# this provides a built in "rounding" feature to generate_calendar()

	$day_names =  #generate all the day names according to the current locale
	array(
		array(
			'full' => 'Sunday',
			'initial' => 'S'
		),		
		array(
			'full' => 'Monday',
			'initial' => 'M'
		),
		array(
			'full' => 'Tuesday',
			'initial' => 'T'
		),
		array(
			'full' => 'Wednesday',
			'initial' => 'W'
		),
		array(
			'full' => 'Thursday',
			'initial' => 'T'
		),
		array(
			'full' => 'Friday',
			'initial' => 'F'
		),
		array(
			'full' => 'Saturday',
			'initial' => 'S'
		)
	);

	list( $month, $year, $month_name, $weekday ) = explode( ',', date( 'm, Y, F, w', $first_of_month ) );
	$weekday = ( $weekday + 7 - $first_day ) % 7; #adjust for $first_day
	$title =  $month_name  . '&nbsp;' . $year;  #note that some locales don't capitalize month and day names

	#Begin calendar. Uses a real <caption>. See http://diveintomark.org/archives/2002/07/03
	list( $p, $pl ) = each( $pn );
	list( $n, $nl ) = each( $pn ); #previous and next links, if applicable

	if ( $p )
		$p = '<span class="gce-prev">' . ( ( $pl ) ? ( '<a class="gce-change-month" title="Previous month" name="' . $pl . '">' . $p . '</a>' ) : $p ) . '</span>&nbsp;';
	if ( $n )
		$n = '&nbsp;<span class="gce-next">' . ( ( $nl ) ? ( '<a class="gce-change-month" title="Next month" name="' . $nl . '">' . $n . '</a>' ) : $n ) . '</span>';

	$calendar = '<table class="gce-calendar">' . "\n" . '<caption class="gce-caption">' . $p . '<span class="gce-month-title">' . ( ( $month_href ) ? ( '<a href="' .  $month_href  . '">' . $title . '</a>' ) : $title ) . '</span>' . $n . "</caption>\n<tr>";

	if ( $day_name_length ) { #if the day names should be shown ($day_name_length > 0)
		#if day_name_length is >3, the full name of the day will be printed
		foreach ( $day_names as $d ) {
			$calendar .= '<th><abbr title="' . $d['full'] . '">' .  $d['initial']  . '</abbr></th>';
		}

		$calendar .= "</tr>\n<tr>";
	}

	$time_now = time();
	$today = mktime( 0, 0, 0, date( 'm', $time_now ), date( 'd', $time_now ), date( 'Y', $time_now ) );

	if ( $weekday > 0 ) $calendar .= '<td colspan="' . $weekday . '">&nbsp;</td>'; #initial 'empty' days
	for ( $day = 1, $days_in_month = date( 't', $first_of_month ); $day <= $days_in_month; $day++, $weekday++ ) {
		if ( 7 == $weekday ) {
			$weekday = 0; #start a new week
			$calendar .= "</tr>\n<tr>";
		}

		$timestamp = mktime( 0, 0, 0, $month, $day, $year );

		if ( isset( $days[$timestamp] ) && is_array( $days[$timestamp] ) ) {

			if (array_key_exists(3, $days[$timestamp]))
			{
				list( $link, $classes, $content, $headline ) = $days[$timestamp];
			}
			else
			{
				list( $link, $classes, $content) = $days[$timestamp];
				$headline = NULL;
			}
			$calendar .= '<td' . ( ( $classes ) ? ( ' class="' . $classes . '">' ) : '>' ) . ( ( $link ) ? ( '<a href="' . $link . '"><span class="gce-day-number">' . $day . '</span></a>' . $content ) : '<span class="gce-day-number">' . $day . '</span>' . $content );

			if (isset($headline))
			{
				foreach ($headline as $a)
				{
					$calendar .= '<br/><span class="gce-cal-headline">';
					$calendar .= '<a href="'.$a[2].'">'.$a[0] . ': ' . $a[1].'</a>';
					$calendar .= '</span>';
				}								
			}

			$calendar .= '</td>';
		}else{
			$css_class = ( $timestamp < $time_now ) ? 'gce-day-past' : 'gce-day-future';
			$calendar .= '<td class="' . $css_class . '"><span class="gce-day-number">' . $day . '</span></td>';
		}
	}

	if ( 7 != $weekday ) $calendar .= '<td colspan="' . ( 7 - $weekday ) . '">&nbsp;</td>'; #remaining "empty" days

	return $calendar . "</tr>\n</table>\n";
}
?>