$(document).ready(function () {
    /* show tooltip on pageload */
    $('.pl-tip-inner').fadeIn(1000,'swing');
    $('.pl-tip-inner').delay(5000).fadeOut(500,'swing');

    /* product count */
    if ($('html')[0].lang === 'en') {
        var text = 'Product found';
        var textm = 'Products found';
    } else {
        var text = 'Produkt gefunden';
        var textm = 'Produkte gefunden';
    }
    var items = document.getElementsByClassName('product');
    var count = items.length;
    if (count != 0) {
        $('.product-count').removeClass('hidden');
        if (count === 1) {
            $('.product-count').text(count + ' ' + text);
        } else if (count > 1) {
            $('.product-count').text(count + ' ' + textm);
        }
    } else {
        $('.product-count').addClass('hidden');
    }

    /* filtered view for product detail pages */
    var win = window.location.search;
    win = win.replace('?', '').split("&");
    for(var item in win){
        if(win[item] == "elisa=1") {
            $("input#productgroup_1").trigger('click');
            showAjaxFilteredProducts();
            break;
        } else if(win[item] == "liquor=1") {
            $("input#productgroup_42").trigger('click');
            showAjaxFilteredProducts();
            break;
        } else if(win[item] == "serionkontrollen=1") {
            $("input#productgroup_28").trigger('click');
            showAjaxFilteredProducts();
            break;
        } else if(win[item] == "kbr=1") {
            $("input#productgroup_4").trigger('click');
            showAjaxFilteredProducts();
            break;
        } else if(win[item] == "antigens=1") {
            $("input#productgroup_23").trigger('click');
            showAjaxFilteredProducts();
            break;
        } else if(win[item] == "plasma=1") {
            $("input#productgroup_24").trigger('click');
            showAjaxFilteredProducts();
            break;
        } else if(win[item] == "antibodies=1") {
            $("input#productgroup_25").trigger('click');
            showAjaxFilteredProducts();
            break;
        } else if(win[item] == "reagents=1") {
            $("input#productgroup_26").trigger('click');
            showAjaxFilteredProducts();
            break;
        } else if(win[item] == "software=1") {
            $("input#productgroup_45").trigger('click');
            showAjaxFilteredProducts();
            break;
        }
    }

    // 2019-05-22. JUH: Already done in main.js
    //if ($("#productsInCart")[0]) {
    //    showProductsAlreadyInCart();
    //}

    // close filter options on mobile page load
    if (window.innerWidth < 768) {
        closeFilterToggles();
        closeFilterBar();
    } else
        if (window.innerWidth < 992) {
            closeFilterBar();
        }

    /* On submit filter form */
    $(document).on("submit", "#ajax-filter-form", function (e) {
        showAjaxFilteredProducts();
        e.preventDefault();
    });
    /* Submit filter form for categories without children by changing checkbox value */
    $("#ajax-filter-form .form-group > input[type=checkbox]").on('change', function () {
        $('#productResult').fadeOut('fast');
        $('#productLoader').fadeIn('fast');
        $('#ajax-filter-form').submit();

        var filterGroups = $('.filter-groups');
        var checkedFilters = filterGroups.find('input:checked').length;
        if(checkedFilters >= 1) {
            $('.filter-reset-row').removeClass('hidden');
        } else {
            $('.filter-reset-row').addClass('hidden');
        }
    });

    /* On submit search form */
    $(document).on("submit", "#ajax-search-form", function (e) {
        showAjaxFilteredProducts();
        $('.filter-reset-row').removeClass('hidden');
        e.preventDefault();
    });

    function showAjaxFilteredProducts() {
        var serializedElement = $("#ajax-filter-form, #ajax-search-form").serialize();
        var filterFormFieldset = $("#ajax-filter-form > fieldset");
        var searchForm = $("#ajax-search-form > .search-row");
        filterFormFieldset.prop("disabled", true ).addClass("searching");
        searchForm.prop("disabled", true ).addClass("searching");
        $.ajax({
                   type: "POST",
                   url: $("#ajax-filter-form").attr('action'),
                   data: serializedElement,
                   success: function (result) {
                       $('#productResult').html(result).fadeIn('fast');
                       $('#productLoader').fadeOut('fast');
                       showProductsAlreadyInCart();
                       filterFormFieldset.prop("disabled", false ).removeClass("searching");
                       searchForm.prop("disabled", false ).removeClass("searching");
                       if (history.pushState) {
                           var newurl = $('#urlToFilteredList').text();
                           window.history.pushState({path:newurl},'',newurl);
                       }

                       /* product count after ajax call */
                       var items = document.getElementsByClassName('product');
                       var count = items.length;
                       if (count != 0) {
                           $('.product-count').removeClass('hidden');
                           if (count === 1) {
                               $('.product-count').text(count + ' ' + text);
                           } else if (count > 1) {
                               $('.product-count').text(count + ' ' + textm);
                           }
                       } else {
                           $('.product-count').addClass('hidden');
                       }
                   },
                   error: function (jqXHR, textStatus, errorThrow) {
                       $('#productResult').html('Ajax request - ' + textStatus + ': ' + errorThrow).fadeIn('fast');
                       $('#productLoader').fadeOut('fast');
                       filterFormFieldset.prop("disabled", false ).removeClass("searching");
                       searchForm.prop("disabled", false ).removeClass("searching");
                   }
               });
    }

    /*
     * !!! Achtung !!! Kopie ist in typo3conf/ext/vs_sitepackage/Resources/Public/Js/main.js
     */
    function showProductsAlreadyInCart() {
        // prüfe, welche products bereits auf Merkliste sind und zeige entsprechendes form
        var productsInCart = $("#product_ids").val().trim().split(',');
        var targets = ['default', 'variants', 'related'];
        for (var j = 0; j < productsInCart.length; j++) {
            for (var i = 0; i < targets.length; i++) {
                if ($('#' + targets[i] + '-addForm-' + productsInCart[j])) {
                    $('#' + targets[i] + '-addForm-' + productsInCart[j]).toggle();
                }
                if ($('#' + targets[i] + '-removeForm-' + productsInCart[j])) {
                    $('#' + targets[i] + '-removeForm-' + productsInCart[j]).toggle();
                }
            }
        }
    }

    $.fn.serializeObject = function () {
        var o = {};
        var a = this.serializeArray();
        $.each(a, function () {
            if (o[this.name] !== undefined) {
                if (!o[this.name].push) {
                    o[this.name] = [o[this.name]];
                }
                o[this.name].push(this.value || "");
            } else {
                o[this.name] = this.value || "";
            }
        });
        return o;
    };

    /* Add/remove product from cart or change quantity */
    $(document).on("submit", ".product form.addForm, .product form.removeForm, form.changeQuantityForm", function (e) {
        doAjaxCall($(this));
        e.preventDefault();
    });
    $(document).on("click", ".product button.addForm, .product button.removeForm", function (e) {
        var formId = '#' + $(this).data('target') + $(this).data('action').substr(0,1).toUpperCase() + $(this).data('action').substr(1) + 'Form';
        $('#' + $(this).data('target') + '-' + $(this).data('action') + 'Form-product').val($(this).data('product'));
        doAjaxCall($(formId), $(this).data('product'), $(this).data('target'));
        e.preventDefault();
    });

    /* Increment/decrement amount of product in cart or add product by autosuggestion */
    $(document).on("click", "a.increment_qty, a.decrement_qty, a.add-by-suggest", function (e) {
        doAjaxCall($(this));
        e.preventDefault();
    });

    function doAjaxCall(element, productUid, target) {
        //target = "default";
        $.ajax({
           async: "true",
           url: element.attr("action") ? element.attr("action") : element.attr("href"),
           type: "POST",
           data: element.serializeObject(),

           success: function (data) {
               var response = JSON.parse(data);
               if (response.status === "200") {
                   setMiniCartCount(response.count, response.ids);

                   if (response.action == "addProduct" || response.action == "removeProduct") {
                       $("#" + target + "-addForm-" + productUid).toggle();
                       $("#" + target + "-removeForm-" + productUid).toggle();
                   }

                   if (response.action == "addProduct" || response.action == "addProductBySuggest") {
                       $("a.merkliste-trigger .popup.added").fadeIn("fast").delay(2000).fadeOut();
                   } else
                       if (response.action == "removeProduct" || response.action == "removeProductCart") {
                           $("a.merkliste-trigger .popup.removed").fadeIn("fast").delay(2000).fadeOut();
                       }

                   if (response.action == "setProductCount") {
                       if (response.newProductCount > 0) {
                           element.find('input[name="tx_vsproducts_products[qty]"]')[0].value = response.newProductCount;
                       }
                   }

                   if (response.action == "incrementProductCount" || response.action == "decrementProductCount") {
                       var qtyInputString = 'input[name="tx_vsproducts_products[qty]"]';
                       var qtyValue = element.closest(".amount").find(qtyInputString)[0].value;
                       if (response.action == "incrementProductCount") {
                           qtyValue++;
                           element.closest(".amount").find(qtyInputString)[0].value = qtyValue;
                       } else
                           if (response.action == "decrementProductCount") {
                               qtyValue--;
                               element.closest(".amount").find(qtyInputString)[0].value = qtyValue;
                           }

                       if (response.action == "removeProductCart") {
                           element.closest('.product').fadeOut('fast');
                           if (response.count == 0) {
                               $("#noItemsAjax").fadeIn('fast');
                           }
                       }
                   }

                   /* lade Produkte per Ajax neu, um aktualisierten Stand zu sehen */
                   if (response.action == "addProductBySuggest") {
                       $("#noItemsAjax").hide();
                       $("#product-container").fadeOut();
                       $.ajax({
                                  type: "POST",
                                  url: $("#reloadCartProducts").attr('href'),
                                  success: function (result) {
                                      $("#product-container").html(result).fadeIn('fast');
                                  }
                              });
                   }

                   if (response.action == "removeProductCart") {
                       element.closest('.product').fadeOut('fast');
                       if (response.count == 0) {
                           $("#noItemsAjax").fadeIn('fast');
                       }
                   }
               }
           }
       });
    }

    function setMiniCartCount(count, ids) {
        $(".merkliste-trigger span.count").html(count);
        if (count > 0) {
            $(".merkliste-trigger span.count").show();
            var idList = '';
            for (var i = 0; i < ids.length; i++) {
                idList += ids[i] + ',';
            }
            if (idList.slice(-1) == ',') {
                idList = idList.substring(0, idList.length - 1);
            }
            $('#product_ids').val(idList);
        } else {
            $(".merkliste-trigger span.count").hide();
        }
    }

    $('#chargeNumber').on('keyup', function(){
        // Declare variables
        console.log("init");
        var input, filter, ul, li, a, i;
        input = document.getElementById('chargeNumber');
        filter = input.value.toUpperCase();
        ul = document.getElementById("chargeNumberList");
        li = ul.getElementsByTagName('li');

        // Loop through all list items, and hide those who don't match the search query
        for (i = 0; i < li.length; i++) {
            a = li[i].getElementsByTagName("a")[0];
            if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
                li[i].style.display = "";
            } else {
                li[i].style.display = "none";
            }
        }
    });


    $(document).on("click", "#filter-toggle", function (e) {
        $(".filter-groups").slideToggle();
        $(".product-count").toggleClass("hidden");
        $("#filter-toggle").toggleClass("open");
    });

    $(document).on("click", "#filter-search-toggle", function (e) {
        $(".filter-search > input, .filter-search > button").toggle();
        $("#filter-search-toggle").toggleClass("open");
    });

    $(document).on("click", ".filter-heading", function (e) {
        $(this).toggleClass("open");
        $(this).next().slideToggle();
    });

    function closeFilterBar() {
        $(".filter-groups").slideUp();
        $(".product-count").addClass("hidden");
        if (window.innerWidth < 768) {
            $(".filter-heading + div").slideUp();
            $(".filter-heading").removeClass("open");
        }
        $("#filter-toggle").removeClass("open");
    }

    function openFilterBar() {
        $(".filter-groups, .filter-heading + div").slideDown();
        $("#filter-toggle").addClass("open");
    }

    function closeFilterToggles() {
        $(".filter-search > input, .filter-search > button").hide();
        $("#filter-search-toggle").removeClass("open");
    }

    function openFilterToggles() {
        $(".filter-search > input, .filter-search > button").show();
    }

    $(function () {
        /* submit form for categories and its subcategories */
        var filterGroups = $('.filter-groups');

        $('.parentgroup > input').click(function () {
            $(this).parent().find('.subgroup input').prop('checked', $(this).is(':checked'));
            $('#productResult').fadeOut('fast');
            $('#productLoader').fadeIn('fast');
            $('#ajax-filter-form').submit();

            var checkedFilters = filterGroups.find('input:checked').length;
            if(checkedFilters >= 1) {
                $('.filter-reset-row').removeClass('hidden');
            } else {
                $('.filter-reset-row').addClass('hidden');
            }
        });

        $('.subgroup input').change(function () {
            var parentContainer = $('#productgroupwrapper-' + $(this).data('productgroup'));
            var numberOfChildCheckBoxes = parentContainer.find('input.productsubgroup').length;
            var checkedChildCheckBox = parentContainer.find('input.productsubgroup:checked').length;
            //console.log(checkedChildCheckBox + ' == ' + numberOfChildCheckBoxes + ' ?');
            if (checkedChildCheckBox != numberOfChildCheckBoxes) {
                // remove checked-status from parent if not *all* childs are checked
                $('#productgroup_' + $(this).data('productgroup')).prop('checked', false);
            } else {
                // Add checked-status to parent if  *all* childs are checked
                $('#productgroup_' + $(this).data('productgroup')).prop('checked', true);
            }
            $('#productResult').fadeOut('fast');
            $('#productLoader').fadeIn('fast');
            $('#ajax-filter-form').submit();

            var checkedFilters = filterGroups.find('input:checked').length;
            if(checkedFilters >= 1) {
                $('.filter-reset-row').removeClass('hidden');
            } else {
                $('.filter-reset-row').addClass('hidden');
            }
        });

        $('#reset-filters').click(function () {
            filterGroups.find('input').prop('checked', false);
            $('#productResult').fadeOut('fast');
            $('#productLoader').fadeIn('fast');
            $('#ajax-filter-form').submit();
            $('.filter-reset-row').addClass('hidden');
            $('#filterword').val('');
            $('#filterword-desk').val('');
            $('.product-count').addClass('hidden');
        });
    });


    
    /*
     * Auto Suggest
     */
    (function ($) {
        $(document).ready(function () {
            var suggestRequest = null;
            var inputField = '#addByAutosuggest'
            var flyoutContainer = '#autosuggest-container';

            $(inputField).on('input', function () {
                if ($(this).val().length >= 3) {
                    suggestRequest = $.ajax({
                        type: "GET",
                        url: '/',
                        data: {
                            type: '1337',
                            q: $(this).val()
                        },
                        dataType: 'html'
                    });

                    suggestRequest.done(function (result) {
                        $(flyoutContainer).html(result);
                        if ($(flyoutContainer).not(':visible')) {
                            $(flyoutContainer).slideDown();
                        } else
                            if ($(flyoutContainer).is(':visible')) {
                                $(flyoutContainer).slideUp();
                            }
                    });
                } else {
                    if ($(flyoutContainer).is(':visible')) {
                        $(flyoutContainer).slideUp();
                    }
                }

            });

            $(document).on('click', flyoutContainer + ' button.close', function () {
                if ($(flyoutContainer).is(':visible')) {
                    $(flyoutContainer).slideUp();
                }
            });

            $(window).resize(function () {
                if ($(flyoutContainer).is(':visible')) {
                    $(flyoutContainer).hide();
                }
            });
        });
    })(jQuery);

    var properties = [
        'title'
    ];

    $.each(properties, function (i, val) {

        var orderClass = '';

        $("#" + val).click(function (e) {
            e.preventDefault();
            $('.title__link.title__link--active').not(this).removeClass('title__link--active');
            $(this).toggleClass('title__link--active');
            $('.title__link').removeClass('asc desc');

            if (orderClass == 'desc' || orderClass == '') {
                $(this).addClass('asc');
                orderClass = 'asc';
            } else {
                $(this).addClass('desc');
                orderClass = 'desc';
            }

            var parent = $(this).closest('.header__item');
            var index = $(".header__item").index(parent);
            var $table = $('#productResult');
            var rows = $table.find('.product').get();
            var isSelected = $(this).hasClass('title__link--active');
            var isNumber = $(this).hasClass('title__link--number');

            rows.sort(function (a, b) {

                var x = $(a).find('.title').eq(index).text();
                var y = $(b).find('.title').eq(index).text();

                if (isNumber == true) {

                    if (isSelected) {
                        return x - y;
                    } else {
                        return y - x;
                    }

                } else {

                    if (isSelected) {
                        if (x < y) return -1;
                        if (x > y) return 1;
                        return 0;
                    } else {
                        if (x > y) return -1;
                        if (x < y) return 1;
                        return 0;
                    }
                }
            });

            $.each(rows, function (index, row) {
                $table.append(row);
            });

            return false;
        });

    });

    /*
     * Sort Download List by Date Class
     */
    function mmyyyy(s){
        var part=s.split(/-/),
            date=new Date();
        date.setYear(part[1]);
        date.setMonth(part[0]);
        return date
    }
    function mmyyyClassSort(a,b){
        var A=mmyyyy(a.getAttribute('id')),
            B=mmyyyy(b.getAttribute('id'));
        return A<B? 1 : -1
    }
    $.fn.sortChildren=function(cmp){
        var self=this,
            children=$.makeArray(this.children()).sort(cmp);
        $.each(children, function(i, child){
            self.append(child)
        });
        return self
    };

    $(function(){
        $('#chargeNumberList').sortChildren(mmyyyClassSort)
    })
});

// Read cookie
function readCookie(name) {
    var nameEQ = name + "=";
    var ca = document.cookie.split(';');
    for(var i=0;i < ca.length;i++) {
        var c = ca[i];
        while (c.charAt(0) === ' ') {
            c = c.substring(1,c.length);
        }
        if (c.indexOf(nameEQ) === 0) {
            return c.substring(nameEQ.length,c.length);
        }
    }
    return null;
}

$cookieValue = readCookie("cookieconsent_status");

if ($cookieValue === "allow") {
    var meineElemente = document.getElementsByClassName('addForm');
    for(var i = 0; i < meineElemente.length; i++) {
        meineElemente[i].removeAttribute('disabled');
    }
} else if ($cookieValue === "deny") {
    var meineElemente = document.getElementsByClassName('addForm');
    for(var i = 0; i < meineElemente.length; i++) {
        meineElemente[i].setAttribute('disabled', true);
    }
}
