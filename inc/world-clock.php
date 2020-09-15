<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/jClocksGMT.css">
<div class="row" style="padding: 20px 0px;">
    <?php              
    $worldClockShow = $options['world_clock_section'];
    foreach ((array) $worldClockShow as $worldClockShow_value)  { ?>
        <?php 
         $clockIDShow = preg_replace('/\s+/', '', $worldClockShow_value['office_loaction']);
        ?> 
        <div class="col-md-2">
            <h4 class="office-title"><?php echo $worldClockShow_value['office_name']; ?></h4>
            <div class="progress-line"></div>
            <div id="<?php echo 'clock_'.$clockIDShow; ?>"></div>
        </div>
    <?php }  ?> 

</div>





<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script src="<?php //echo get_template_directory_uri();?>/js/jClocksGMT.js"></script>
<script src="<?php echo get_template_directory_uri();?>/js/jquery.rotate.js"></script>



<script type="text/javascript">
	
	 (function($) {

    $.fn.extend({
        
        jClocksGMT: function( options ) 
        {
            // plugin default options
            var defaults = 
            {
                title: 'Greenwich, England',
                offset: '0',
                dst: true,
                digital: true,
                analog: true,
                timeformat: 'hh:mm A',
                date: false,
                dateformat: 'MM/DD/YYYY',
                angleSec: 0,
                angleMin: 0,
                angleHour: 0,
                skin: 1,
                imgpath: ''
            }
            
            // merge user options with defaults
            var options = $.extend(defaults, options);
            
            return this.each(function()
            {
                // set offset variable per instance
                var offset = parseFloat(options.offset);
                // get id of element
                var id = $(this).attr('id');

                // add class to main element
                $(this).addClass('jcgmt-container');

                // create label
                $("<div />", { text: options.title, class: "jcgmt-lbl" }).appendTo("#" + id);

                if( options.analog )
                {
                    // create clock container
                    $("<div />", { class: "jcgmt-clockHolder" }).appendTo("#" + id);
                    // create hour hand
                    $("<div />", { class: "jcgmt-rotatingWrapper" }).append($("<img />", { class: "jcgmt-hour", src: options.imgpath + "<?php echo get_template_directory_uri();?>/images/jcgmt-" + options.skin + "-clock_hour.png" })).appendTo("#" + id + ' .jcgmt-clockHolder');
                    // create min hand
                    $("<div />", { class: "jcgmt-rotatingWrapper" }).append($("<img />", { class: "jcgmt-min", src: options.imgpath + "<?php echo get_template_directory_uri();?>/images/jcgmt-" + options.skin + "-clock_min.png" })).appendTo("#" + id + ' .jcgmt-clockHolder');
                    // create sec hand
                    $("<div />", { class: "jcgmt-rotatingWrapper" }).append($("<img />", { class: "jcgmt-sec", src: options.imgpath + "<?php echo get_template_directory_uri();?>/images/jcgmt-" + options.skin + "-clock_sec.png" })).appendTo("#" + id + ' .jcgmt-clockHolder');
                    // create clock face
                    $("<img />", { class: "jcgmt-clock", src: options.imgpath + '<?php echo get_template_directory_uri();?>/images/jcgmt-' + options.skin + '-clock_face.png' }).appendTo("#" + id + ' .jcgmt-clockHolder');
                }

                // create digital clock container
                $("<div />", { class: "jcgmt-digital" }).appendTo("#" + id);

                //create date container
                $("<div />", { class: "jcgmt-date" }).appendTo("#" + id);
                
                // initial hand rotation
                $('#' + id + ' .jcgmt-sec').rotate( options.angleSec );
                $('#' + id + ' .jcgmt-min').rotate( options.angleMin );
                $('#' + id + ' .jcgmt-hour').rotate( options.angleHour );

                // get timezone by gmt offset
                Date.prototype.getTimezoneByOffset = function( offset, y, m, d ) 
                {
                    var date = new Date; // get date

                    if( y ) // if has date params
                    {
                        date = new Date( y, m, d ); // get date with params
                    }
                    
                    var utc = date.getTime() + ( date.getTimezoneOffset() * 60000 ); // get local offset

                    var dateGMT = new Date( utc + ( 3600000 * offset ) ); // get requested offset based on local

                    return dateGMT;
                }

                // check if daylight saving time is in effect
                Date.prototype.stdTimezoneOffset = function() 
                {
                    var jan = this.getTimezoneByOffset( offset, this.getFullYear(), 0, 1 );

                    var jul = this.getTimezoneByOffset( offset, this.getFullYear(), 6, 1 );

                    return Math.max( jan.getTimezoneOffset(), jul.getTimezoneOffset() );
                }

                // checkes if DST is in effect
                Date.prototype.isDST = function() 
                {
                    var date = this.getTimezoneByOffset(offset);

                    return date.getTimezoneOffset() < this.stdTimezoneOffset();
                }

                // date formatter
                Date.prototype.format = function( format )
                {
                    var D = "Sunday,Monday,Tuesday,Wednesday,Thursday,Friday,Saturday".split(","),
                        M = "January,February,March,April,May,June,July,August,September,October,November,December".split(",");

                    var self = this;
                    return format.replace(/a|A|Z|S(SS)?|ss?|mm?|HH?|hh?|D{1,4}|M{1,4}|YY(YY)?|'([^']|'')*'/g, function(str) {
                      var c1 = str.charAt(0),
                          ret = str.charAt(0) == "'"
                          ? (c1=0) || str.slice(1, -1).replace(/''/g, "'")
                          : str == "a"
                            ? (self.getHours() < 12 ? "am" : "pm")
                            : str == "A"
                              ? (self.getHours() < 12 ? "AM" : "PM")
                              : str == "Z"
                                ? (("+" + -self.getTimezoneOffset() / 60).replace(/^\D?(\D)/, "$1").replace(/^(.)(.)$/, "$10$2") + "00")
                                : c1 == "S"
                                  ? self.getMilliseconds()
                                  : c1 == "s"
                                    ? self.getSeconds()
                                    : c1 == "H"
                                      ? self.getHours()
                                      : c1 == "h"
                                        ? (self.getHours() % 12) || 12
                                        : (c1 == "D" && str.length > 2)
                                          ? D[self.getDay()].slice(0, str.length > 3 ? 9 : 3)
                                          : c1 == "D"
                                            ? self.getDate()
                                            : (c1 == "M" && str.length > 2)
                                              ? M[self.getMonth()].slice(0, str.length > 3 ? 9 : 3)
                                              : c1 == "m"
                                                ? self.getMinutes()
                                                : c1 == "M"
                                                  ? self.getMonth() + 1
                                                  : ("" + self.getFullYear()).slice(-str.length);
                      return c1 && str.length < 4 && ("" + ret).length < str.length
                        ? ("00" + ret).slice(-str.length)
                        : ret;
                    });
                  }
                
                // create new date object
                var dateCheck = new Date().getTimezoneByOffset( offset );

                // check for DST
                if( options.dst && dateCheck.isDST() ) 
                {
                   offset = offset + 1;
                }

                // clock interval
                setInterval(function () 
                {
                    // create new date object
                    var nd = new Date().getTimezoneByOffset( offset ); 
                    
                    // time string variable
                    var timeStr = nd.format( options.timeformat );
                    
                    // update analog clock if enabled
                    if( options.analog ) 
                    {
                        // rotate second hand
                        $('#' + id + ' .jcgmt-sec').rotate( nd.getSeconds() * 6 );
                        // rotate minute hand
                        $('#' + id + ' .jcgmt-min').rotate( nd.getMinutes() * 6 ) ;
                        // rotate hour hand
                        $('#' + id + ' .jcgmt-hour').rotate( ( nd.getHours() * 5 + nd.getMinutes() / 12 ) * 6 );

                        // update title for tooltip
                        $('#' + id + ' .jcgmt-clockHolder').attr( 'title', timeStr );
                    }
                    
                    // update digital clock if enabled
                    if( options.digital ) 
                    {
                        $('#' + id + ' .jcgmt-digital').html( timeStr );
                        $('#' + id + ' .jcgmt-digital').attr( 'title', timeStr );
                    }

                    // update date if enabled
                    if( options.date ) 
                    {
                        var dateStamp = nd.format( options.dateformat );
                        $('#' + id + ' .jcgmt-date').html( dateStamp );
                        $('#' + id + ' .jcgmt-date').attr( 'title', dateStamp );
                    }

                }, 1000);

            });

        }

    });

})(jQuery);



</script>

<script>
            $(document).ready(function(){

                $('#clock_hou').jClocksGMT(
                {
                    title: 'Houston, TX, USA', 
                    offset: '-6'
                });

                $('#clock_india').jClocksGMT(
                {
                    title: 'Denmark', 
                    offset: '+1', 
                    //dst: true, 
                    //skin: 2, 
                    //timeformat: 'HH:mm'
                });

                $('#clock_korea').jClocksGMT(
                {
                    title: 'Seoul, S. Korea', 
                    offset: '+8', 
                    //skin: 3, 
                    date: false
                });

                $('#clock_uk').jClocksGMT(
                {   
                    date: false, 
                    dateformat: 'YYYY/MM/DD', 
                    //skin: 4
                });

                $('#clock_tokyo').jClocksGMT(
                {
                    title: 'Tokyo, Japan',
                    offset: '+9',
                    //skin: 5
                });

                 $('#clock_bd').jClocksGMT(
                {
                    title: 'Dhaaka, Bangladesh',
                    offset: '+6',
                    //skin: 5
                });

                <?php 
                
                 $worldClock = $options['world_clock_section'];
                 foreach ((array) $worldClock as $worldClock_value)  { ?>
                  <?php 
                    $clockID = preg_replace('/\s+/', '', $worldClock_value['office_loaction']);
                   ?>  
                 $('<?php echo '#clock_'.$clockID ?>').jClocksGMT(
                {
                    title: '<?php echo $worldClock_value['office_loaction']; ?>',
                    offset: '<?php echo $worldClock_value['country_gmt_time']; ?>',
                });

                <?php }  ?> 

                 
                

            });
        </script>

        <style type="text/css">
            .progress-line {
                height: 8px;
                width: 100%;
                padding: 0;
                margin-bottom: 20px;
                overflow: hidden;
                border-radius: 0;
                background: rgba(66, 66, 66, 0.62);
                -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.82), 0 1px rgba(255, 255, 255, 0.11);
                box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.82), 0 1px rgba(255, 255, 255, 0.11);
                padding: 3px;
                margin: 0 0 10px;
            }


            .office-title {
                font-size: 16px;
                font-weight: 400;
                letter-spacing: 1px;
                color: #fff;
                text-transform: uppercase;
                text-align: center;
            }
        </style>