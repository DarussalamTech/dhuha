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

        }, function() {

            if (window.location.hash != "") {

                hash_id = window.location.hash.split("#");
                hash_id = hash_id[1];
                dhuha.makeActiveLink(hash_id);
            }
            else {

            }

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

        jQuery(".header_content p a[href=#" + section_id + "]").attr("class", "hover");


        jQuery('html, body').animate({
            scrollTop: $("#" + section_id).offset().top,
        }, 1000, function() {

        });

    },
    makeActiveLink: function(section_id) {
        jQuery(".header_content p a").removeAttr("class");

        jQuery(".header_content p a[href=#" + section_id + "]").attr("class", "hover");


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
    /**
     * 
     * @returns {undefined}
     */
    makeCurrentActiveLab: function() {
        jQuery(document).scroll(function() {
            var cutoff = jQuery(window).scrollTop();
            var cutoffRange = cutoff + 200;


            jQuery('section').each(function() {
                if (jQuery(this).offset().top > cutoff && jQuery(this).offset().top < cutoffRange) {
                    dhuha.makeActiveLink(jQuery(this).attr("id"));
                   
                }
            });
            /**
             * special case for header
             */
            if (jQuery("#header").offset().top == cutoff) {
                    dhuha.makeActiveLink("header");
                  
                   
            }
        })

    }
}


