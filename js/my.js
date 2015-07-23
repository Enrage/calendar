/*!
 * FullCalendar v1.2.1 Google Calendar Extension
 *
 * Visit http://arshaw.com/fullcalendar/docs/#google-calendar
 * for docs and examples.
 *
 * Copyright (c) 2009 Adam Shaw
 * Dual licensed under the MIT and GPL licenses:
 *   http://www.opensource.org/licenses/mit-license.php
 *   http://www.gnu.org/licenses/gpl.html
 *
 * Date: 2009-05-31 13:56:02 -0700 (Sun, 31 May 2009)
 * Revision: 23
 */
 
(function($) {

	$.fullCalendar.myFeed = function(feedUrl, options) {
		
		options = options || {};
		var draggable = options.draggable || false;
		
		return function(start, end, callback) {
			$.getJSON(feedUrl,
				{
					'start-min': $.fullCalendar.formatDate(start, 'c'),
					'start-max': $.fullCalendar.formatDate(end, 'c'),
				},
				function(data) {
					var events = data;
					callback(events);
				});
		}
			
	}

})(jQuery);
