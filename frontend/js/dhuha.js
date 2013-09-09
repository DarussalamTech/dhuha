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

            jQuery(this).prev().attr("style", "height:20px;width:25px");

        }, function() {

            jQuery(this).prev().removeAttr("style");

        });
    },
     /**
     * section will be loaded 
     * when click on these
     * @param {type} section_id
     * @returns 
     */
    scrolltoSection: function(section_id) {
       
        jQuery('html, body').animate({
            scrollTop: $("#" + section_id).offset().top
        }, 2000);
    },
}


