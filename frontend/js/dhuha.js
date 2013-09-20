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
        if (typeof(left_menu_colors) != "undefined" && typeof(left_menu_colors[section]) != "undefined" && !$(".header_row .toggle").is(":visible")) {
            jQuery(".header_content ul li a").attr("style", "color:" + left_menu_colors[section] + " !important;");
        }
        else {
            jQuery(".header_content ul li a").removeAttr("style");
        }

    },
    gallleryShow: function(obj, gallery_obj) {
        jQuery(".filter_list li a").removeAttr("class");
        jQuery(obj).attr("class", "checked");


        //event.preventDefault();
        attrbute_s = jQuery(obj).attr("data-value");
        //console.log(gallery_obj);
        if (attrbute_s == "all") {

            $('.art_images').hide();
            $('.art_images').html(gallery_obj.html());
            $('.art_images').slideDown('slow');
        }
        else {
            $('.art_images').hide();
            //console.log(gallery_obj.find("[data-value='" + attrbute_s + "']").html());
            //console.log(gallery_obj.find("[data-value='" + attrbute_s + "']"));
            html_arr = new Array();

            //dhuha.chunk(a, 4, true)
            gallery_obj.find("[data-value='" + attrbute_s + "']").each(function() {
                html_arr.push($(this).html());

            })
            html_1 = "";
            if (html_arr.length != 0) {
                new_htm_arr = dhuha.chunk(html_arr, 4, true);
                for (o in new_htm_arr) {
                    html_1 += "<ul>";
                    for (ob in new_htm_arr[o]) {
                        
                        html_1 += '<li data-value="' + attrbute_s + '" class="art_img">';
                        html_1 += new_htm_arr[o][ob];
                        html_1 += '</li>';
                    }
                    html_1 += "</ul>";
                }
            }

            $('.art_images').html(html_1);

           $('.art_images').slideDown('slow');
        }
    },
    chunk: function(input, size, preserve_keys) {
        // http://kevin.vanzonneveld.net
        // +   original by: Carlos R. L. Rodrigues (http://www.jsfromhell.com)
        // +   improved by: Brett Zamir (http://brett-zamir.me)
        // %        note 1: Important note: Per the ECMAScript specification, objects may not always iterate in a predictable order
        // *     example 1: array_chunk(['Kevin', 'van', 'Zonneveld'], 2);
        // *     returns 1: [['Kevin', 'van'], ['Zonneveld']]
        // *     example 2: array_chunk(['Kevin', 'van', 'Zonneveld'], 2, true);
        // *     returns 2: [{0:'Kevin', 1:'van'}, {2: 'Zonneveld'}]
        // *     example 3: array_chunk({1:'Kevin', 2:'van', 3:'Zonneveld'}, 2);
        // *     returns 3: [['Kevin', 'van'], ['Zonneveld']]
        // *     example 4: array_chunk({1:'Kevin', 2:'van', 3:'Zonneveld'}, 2, true);
        // *     returns 4: [{1: 'Kevin', 2: 'van'}, {3: 'Zonneveld'}]

        var x, p = '', i = 0, c = -1, l = input.length || 0, n = [];

        if (size < 1) {
            return null;
        }

        if (Object.prototype.toString.call(input) === '[object Array]') {
            if (preserve_keys) {
                while (i < l) {
                    (x = i % size) ? n[c][i] = input[i] : n[++c] = {}, n[c][i] = input[i];
                    i++;
                }
            }
            else {
                while (i < l) {
                    (x = i % size) ? n[c][x] = input[i] : n[++c] = [input[i]];
                    i++;
                }
            }
        }
        else {
            if (preserve_keys) {
                for (p in input) {
                    if (input.hasOwnProperty(p)) {
                        (x = i % size) ? n[c][p] = input[p] : n[++c] = {}, n[c][p] = input[p];
                        i++;
                    }
                }
            }
            else {
                for (p in input) {
                    if (input.hasOwnProperty(p)) {
                        (x = i % size) ? n[c][x] = input[p] : n[++c] = [input[p]];
                        i++;
                    }
                }
            }
        }
        return n;
    }
}


