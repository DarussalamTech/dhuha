/* 
 * dtech class file for doing all js work
 *  
 */

var dhuha = {
    /**
     * will take to top of the page
     * @returns 
     */
    sideBarLinkHover: function() {
        jQuery(".header_content p a").hover(function() {

            jQuery(".header_content p a").removeAttr("class");
            jQuery(".header_content p a").prev().removeAttr("style");

            jQuery(this).prev().attr("style", "height:20px;width:25px");

        }, function() {

            //jQuery(this).prev().removeAttr("style");

        });
    },
    /**
     * section will be loaded 
     * when click on these
     * @param {type} section_id
     * @returns 
     */
    scrolltoSection: function(section_id) {

        jQuery(".header_content p a").removeAttr("class");
        jQuery(".header_content p a").prev().removeAttr("style");

        jQuery(".header_content p a[href=#" + section_id + "]").attr("class", "hover");
        jQuery(".header_content p a[href=#" + section_id + "]").prev().attr("style", "height:20px;width:25px");

        jQuery('html, body').animate({
            scrollTop: $("#" + section_id).offset().top,
        }, 2000, function() {


        });


    },
    /**
     * 
     * @returns {undefined}
     */
    handleActiveClassTopNav: function() {
        jQuery("#top_navigation li a").click(function() {
            jQuery("#top_navigation li a").removeAttr("class");
            jQuery(this).attr("class", "active");
        })
    },
}


