/* 
 * dtech class file for doing all js work
 *  
 */

var dhuha = {
    /**
     * will take to top of the page
     * @returns 
     */
    hash_sign: "",
    sideBarLinkHover: function() {
        jQuery(".header_content p a").hover(function() {
            //jQuery(".header_content p a").removeAttr("class");

        }, function() {

            if (window.location.hash != "") {

                hash_id = window.location.hash.split("#");
                hash_id = hash_id[1];
                dhuha.makeActiveLink(hash_id);
            }
            else if (dhuha.hash_sign != "") {

                dhuha.makeActiveLink(dhuha.hash_sign);
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

        jQuery(".header_content ul li a").removeAttr("class");





        jQuery('html, body').animate({
            scrollTop: $("#" + section_id).offset().top,
        }, 1000, function() {
            dhuha.makeColorChangeOfMenus(section_id);
            jQuery(".header_content ul li a[href=#" + section_id + "]").attr("class", "hover");
            //console.log(section_id + "hi");
        });

    },
    registerSidebarLink: function() {

        jQuery(".sidebar_link").click(function(event) {

            var full_url = jQuery(this).attr("href");
            var section_id = full_url.replace("#", "");

            event.preventDefault();
            jQuery(".header_content ul li a").removeAttr("class");

            jQuery(".header_content ul li a[href=#" + section_id + "]").attr("class", "hover");

            dhuha.hash_sign = section_id;

            //console.log(jQuery(".header_content ul li a[href=#" + section_id + "]"));

            //$(document).unbind("scroll",dhuha.makeCurrentActiveLab);

            jQuery('html, body').animate({
                scrollTop: $("#" + section_id).offset().top,
            }, 1000, function() {
                dhuha.makeColorChangeOfMenus(section_id);
                 jQuery(".header_content ul li a").removeAttr("class");
                jQuery(".header_content ul li a[href=#" + section_id + "]").attr("class", "hover");
                //$(document).bind("scroll",dhuha.makeCurrentActiveLab);
            });


        })
    },
    makeActiveLink: function(section_id) {
        jQuery(".header_content ul li a").removeAttr("class");

        jQuery(".header_content ul li a[href=#" + section_id + "]").attr("class", "hover");


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


        jQuery(window).scroll(function(e) {
            var cutoff = jQuery(window).scrollTop();
            var cutoffRange = cutoff + 200;

            e.preventDefault();

            jQuery('section').each(function() {

                if (jQuery(this).offset().top > cutoff && jQuery(this).offset().top < cutoffRange) {
                    dhuha.makeActiveLink(jQuery(this).attr("id"));
                    dhuha.makeColorChangeOfMenus(jQuery(this).attr("id"));

                }
            });
            /**
             * special case for header
             */
            if (jQuery("#header").offset().top == cutoff) {
                dhuha.makeActiveLink("header");
                dhuha.makeColorChangeOfMenus("header");
            }

        })

    },
    /**
     * 
     * @returns {undefined}
     */
    makeColorChangeOfMenus: function(section) {
        if (typeof(left_menu_colors[section]) != "undefined" && !$(".header_row .toggle").is(":visible")) {
            jQuery(".header_content ul li a").attr("style", "color:" + left_menu_colors[section] + " !important;");
        }
        else {
            jQuery(".header_content ul li a").removeAttr("style");
        }

    }
}


