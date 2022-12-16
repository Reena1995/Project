(function ($) {
    'use strict';

    /**
     * @property colors
     * @description SET colors for charts, includes system colors and pastel colors for charts
     * @returns {array} - array of colors/colours
     */
    var body = $("body"), windowWidth = window.innerWidth;
    window.colors = [
        "#687ae8",
        "#12bfbb",
        "#ffb058",
        "#2991cf",
        "#87b8d4",
        "#109693",
        "#f29494",
        "#527cf9",
        "#7140d1",
        "#e79e4e",
        "#52b4ee",
        "#6ed7e0",
        "#8fa6b4",
        "#ffcfcf",
        "#28304e",
        "#95aac9",
        "#f2545b",
        "#f7bc06",
        "#00cc99",
        "#19b5fe",
        "#E3EBF6"
    ];

    /**
     * @description sidebar operations like sliding sidebar,toggle and responsive options
     * @param {(Element|jQuery)} [context] - A DOM Element, Document, or jQuery to use as context.
     * @requires jQuery
     */

    // sidebar mouse events
    $(document).on("mouseenter", "body:not(.sidebar-pinned) .admin-sidebar", function (e) {
        if (windowWidth >= 1200) {
            $(this).addClass("sidebar-show");

        }
    });
    $(document).on("mouseleave", "body:not(.sidebar-pinned) .admin-sidebar", function (e) {
        if (windowWidth >= 1200) {
            $(this).removeClass("sidebar-show");
        }
    });

    //sidebar pin - toggle sidebar pin
    $(document).on("click", ".admin-pin-sidebar", function (e) {
        e.preventDefault();
        body.toggleClass("sidebar-pinned");
        $(this).toggleClass("pinned");
        // trigger resize event for charts to redraw if required
        window.dispatchEvent(new Event('resize'));
    });

    // append backdrop for mobile
    body.append('<div class="sidebar-backdrop "></div>');

    // close event on mobile by clicking close button or backdrop
    $(document).on("click", " .admin-close-sidebar ,.sidebar-backdrop", function (e) {
        e.preventDefault();
        body.removeClass("sidebar-open");

    });

    /**
     * @description Sidebar Multilevel Menu
     * @param {(Element|jQuery)} [context] - A DOM Element, Document, or jQuery to use as context.
     * @requires jQuery
     */
    $(document).on("click", ".open-dropdown", function (e) {
        e.preventDefault();
        if (!$(this).next().is(":visible")) {
            //opens the adjacent list to the target
            $(this).next().slideDown();
            $(this).parent().addClass("opened");
        }
        else {
            //closes the adjacent list to the target
            $(this).next().slideUp();
            $(this).parent().removeClass("opened");
        }
    });

    /**
     * @description Override Default Behaviour for scroll
     * @param {(Element|jQuery)} [context] - A DOM Element, Document, or jQuery to use as context.
     * @requires jquery.bootstrap
     */
    $('.modal').on('show.bs.modal', function (e) {
        if ($(e.currentTarget).attr("data-popup")) {
            body.addClass("body-scrollable");
        }
    });
    $('.modal').on('hidden.bs.modal', function (e) {
        body.removeClass("body-scrollable");
    });

    /**
     * @description Initialize custom scrollbar
     * @param {(Element|jQuery)} [context] - A DOM Element, Document, or jQuery to use as context.
     * @requires jquery.scrollbar plugin
     */
    $(".js-scrollbar").scrollbar();



    /**
     * @description toggles the target class with class given in toggleclass attr
     * * @param {(Element|jQuery)} [context] - A DOM Element, Document, or jQuery to use as context.
     * @requires jQuery
     */
    $(document).on("click", "[data-toggleclass]", function (e) {
        e.preventDefault();
        $($(this).attr("data-target")).toggleClass($(this).attr("data-toggleClass"));
    });
    /////////////////////////////start////////////////////////////////////////////////////////////////////////////////
    function hour(hourqty, hourprice, gethor) {

        var totalhours = hourqty * hourprice;
        console.log($(this), 'hjkhkjhkj');

        gethor.closest('td').siblings().find('.hourtotal').val(totalhours);

        var subtotalhour = 0;
        $(".hourtotal").each(function (index, value) {
            subtotalhour += Number($(this).val());

        });

        var tax = $('.tax_row').val();
        if (tax == "") {
            var tax = $('.tax_row').val()
        }
        console.log(subtotalhour, 'total sum');
        // var tax=$('.tax_row').val();
        calculation(subtotalhour, tax);


    }

    function contingency(contqty, contprice, getthis) {

        var totalcont = contqty * contprice / 100;
        // console.log(getParent,'getParent');
        getthis.closest('td').siblings().find('.conttotal').val(totalcont);

        var subtotalcont = 0;
        $(".conttotal").each(function (index, value) {
            subtotalcont += Number($(this).val());

        });

        var tax = $('.tax_row').val();
        if (tax == "") {
            var tax = $('.tax_row').val()
        }

        console.log(subtotalcont, 'total sum');
        // var tax=$('.tax_row').val();
        calculation(subtotalcont, tax);
    }


    function calculation(subtotal, tax) {
        // console.log(subtotal,'subtotal');
        $('#sub_total').val(subtotal);
        var total_tax = subtotal * tax / 100;
        $('#tax_amount').val(total_tax);
        console.log(total_tax, 'tax');
        $('.tax_value').val(total_tax);
        $('#Grand_total').val(subtotal + total_tax);
    }
    ////////////////////////////////////////////////////////////////
    
    $(document).on('change', '.tax_row', function () {
        
        var data = $('#myTab li .active');
        // console.log(data.attr('id'));
        console.log("change tax");
        console.log(data.attr('id'));
        if (data.attr('id') == 'hourly-tab-z') {

            var subtotalhour = 0;
            $(".hourtotal").each(function (index, value) {
                subtotalhour += Number($(this).val());
    
            });
    
           
            console.log(subtotalhour, 'total sum');
            var tax=$('.tax_row').val();
            calculation(subtotalhour, tax);
            
            
           
        }
        else if (data.attr('id') == 'flat-rate-tab-z') {

           
            var subtotalflat = 0;
            $(".flattotal").each(function (index, value) {
                subtotalflat += Number($(this).val());
    
            });
            
            console.log(subtotalflat, 'total sum');
            var flattax=$('.tax_row').val();
            // console.log(flattax, 'tax((((((((((((((((((');
            calculation(subtotalflat, flattax);
           
            
           
        }
        else if (data.attr('id') == 'contingency-fee-tab-z') {


            var subtotalcont = 0;
            $(".conttotal").each(function (index, value) {
                subtotalcont += Number($(this).val());
    
            });
    
           
    
            console.log(subtotalcont, 'total sum');
            var tax=$('.tax_row').val();
            calculation(subtotalcont, tax);
        }
    })    


    ///////////////////////////////////////////////////////////////


    function validation() {

        $("input").blur(function () {
            console.log('input');

            var main = $(this).attr('data_type_name');
            console.log(main);
            if (this.value == "") {
                console.log('zzzz')

                $(this).next("span").remove();
                $(this).after('<span class="error">' + main + ' is required.</span>')
            }
            else {
                console.log('xxxx');

                $(this).next("span").remove();
                console.log($(this).next("span"));


            }
        })

    }
    /////////////////////////////////////////////////
    $(document).on('click', '.delete_row-tab', function () {
        console.log('delete');
        var deletedbtnone = $(this).closest('.hourly').remove();
        var deletedbtwo = $(this).closest('.flat').remove();
        var deletedbthree = $(this).closest('.contingency').remove();

        var data = $('#myTab li .active');
        console.log(data.attr('id'));

        var subtotalhour = 0;
        if (data.attr('id') == 'hourly-tab-z') {

            $(".hourtotal").each(function (index, value) {
                subtotalhour += Number($(this).val());

            });
        }
        else if (data.attr('id') == 'flat-rate-tab-z') {


            $(".flattotal").each(function (index, value) {
                subtotalhour += Number($(this).val());

            });

        }
        else if (data.attr('id') == 'contingency-fee-tab-z') {


            $(".conttotal").each(function (index, value) {
                subtotalhour += Number($(this).val());

            });
        }
        console.log(subtotalhour, 'total sum');

        var tax = $('.tax_row').val();
        calculation(subtotalhour, tax);





    });
    /////////////////////hour counting start////////////////
    ///////////////////////hourqty blur////////////////////
    var hourqtyvalue
    var hourpricevalue



    $(document).on('blur', '.hourqty', function () {

        console.log(".hourqty");
        hourqtyvalue = $(this).val();
        console.log(hourqtyvalue);

        hourpricevalue = $(this).closest('td').siblings().find('.hourprice').val();
        console.log(hourpricevalue, 'hourpricevalu');



        var getthor = $(this);
        hour(hourqtyvalue, hourpricevalue, getthor);



    });
    /////////////////////////hourprice on blur////////////////////////////
    var hourpricevalue
    var hourqtyvalue
    var total_hours
    var total_working_total

    $(document).on('blur', '.hourprice', function () {

        console.log(".hourprice");
        hourpricevalue = $(this).val();
        console.log(hourpricevalue);
        $('a').closest('td').siblings().find('input')
        hourqtyvalue = $(this).closest('td').siblings().find('.hourqty').val();



        var getthor = $(this);
        hour(hourqtyvalue, hourpricevalue, getthor);

    });
    /////////////////flat counting start ////////////////////////////

    var flatpricevalue
    var total_flat
    var total_flat_total

    $(document).on('blur', '.flatprice', function () {

        console.log(".flatprice");
        flatpricevalue = $(this).val();
        console.log(flatpricevalue);



        total_flat = flatpricevalue;
        console.log(total_flat, 'total_flat');
        total_flat_total = ($(this).closest('td').siblings().find('.flattotal').val(total_flat));
        console.log($(this).closest('td').siblings().find('.flattotal').val(total_flat));


        var subtotalflat = 0;
        $(".flattotal").each(function (index, value) {
            subtotalflat += Number($(this).val());

        });
        var flattax = $('.tax_row').val();
        if (flattax == "") {
            $('.tax_row').val();
        }
        console.log(subtotalflat, 'total sum');
        // var flattax=$('.tax_row').val();
        console.log(flattax, 'tax((((((((((((((((((');
        calculation(subtotalflat, flattax);


    });
    ////////////////////////////cont start//////////////////////////////
    //////////////////cont on price blur///////////////////////////////
    var contqtyvalue
    var contpricevalue


    $(document).on('blur', '.contqty', function () {

        console.log(".contqty");
        contqtyvalue = $(this).val();
        console.log(contqtyvalue, 'contqty');
        contpricevalue = $(this).closest('td').siblings().find('.contprice').val();
        console.log(contpricevalue, 'price');


        var getParent = $(this);
        contingency(contpricevalue, contqtyvalue, getParent);



    });
    //////////////////cont on conyqty blure///////////////////////////////
    var contpricevalue
    var contqtyvalue

    $(document).on('blur', '.contprice', function () {

        console.log(".contprice");
        contpricevalue = $(this).val();
        console.log(contpricevalue, 'contprice');
        contqtyvalue = $(this).closest('td').siblings().find('.contqty').val();
        console.log(contqtyvalue, 'contqty');


        var getParent = $(this);
        contingency(contpricevalue, contqtyvalue, getParent);



    });
    ///////////////////////////////subtotal/////////////////////////////
    // var data = $('#myTab li .active');
    
    $(document).on('click', '.invoiceUl', function () {

        var data = $('#myTab li .active');
        console.log(data.attr('id'));

        if (data.attr('id') == 'hourly-tab-z') {
            var rowCountflat = $('#flat-rate-content tr');
            console.log(rowCountflat)
            $(rowCountflat).remove();
            var rowCountcont = $('#contingency-fee-content tr');
            console.log(rowCountcont)
            $(rowCountcont).remove();

        }
        if (data.attr('id') == 'flat-rate-tab-z') {

            
            // var rowCounthour = $('#hourly-rate-content tr');
            // console.log(rowCounthour)
            // $(rowCounthour).remove();
          
            var rowCountcont = $('#contingency-fee-content tr');
            console.log(rowCountcont)
            $(rowCountcont).remove();

        
        }
        if (data.attr('id') == 'contingency-fee-tab-z') {

            // var rowCounthour = $('#hourly-rate-content tr');
            // console.log(rowCountcont)
            // $(rowCountcont).remove();
            // var rowCountflat = $('#flat-rate-content tr');
            // console.log(rowCountcont)
            // $(rowCountflat).remove();

        }




        $('.tax_row').val('');
        $('.subtotal').val('');
        $('.tax_value').val('');
        $('#tax_amount').val('');
        $('#Grand_total').val('');
    });


    //////////////////////////////////////////contend/////////////////////////
    $(document).ready(function () {
        $("#add_row").click(function () {

            console.log('first click');
            // var data= $(this).parents()[2];
            var data = $('#myTab li .active');
            // console.log(data.attr('id'));


            if (data.attr('id') == 'hourly-tab-z') {
                console.log('hhhhh');
                var houcontent = `
                <tr class="hourly">
                <td><input type="text" name='product[]'
                    data_type_name="Description"  placeholder='Description'
                        class="form-control" /></td>
                <td class="tdqty"><input type="number"
                    data_type_name="qty"  name='qty[]' placeholder='Hours'
                        class="form-control qty hourqty"
                        step="0" min="0" />
                <td class="tdprice">
                    <input type="number" name='price[]'
                    data_type_name="price" placeholder='Rate per Hours'
                        class="form-control price hourprice"
                        step="0.00" min="0" />
                </td>
                <td>
                    <input type="number" name='total[]'
                        placeholder='0.00'
                        class="form-control total hourtotal"
                        readonly />
                </td>
                <td><i style="font-size: 25px; "
                        class="icon-placeholder mdi mdi-minus-box-outline delete_row-tab"></i>
                </td>
            </tr>   
                `;
                console.log(houcontent);
                var hourappend = $('#hourly-rate-content').append(houcontent);
                // console.log(hourappend);
                validation();
                var rowCountflat = $('#flat-rate-content tr').length;
                console.log(rowCountflat)
                var rowCountcont = $('#contingency-fee-content tr').length;
                console.log(rowCountcont)
            }
            else if (data.attr('id') == 'flat-rate-tab-z') {
                console.log('ffff');

                var flatcontent = `                                                                           
                <tr class="flat">
                <td><input type="text" name='product[]'
                    data_type_name="Description" placeholder='Description'
                        class="form-control" /></td>
                <td><input type="number" name='price[]'
                    data_type_name="price" placeholder='Flat Rate'
                        class="form-control price flatprice"
                        step="0.00" min="0" /></td>
                <td><input type="number" name='total[]'
                    placeholder='0.00'
                        class="form-control total flattotal"
                        readonly /></td>
                <td><i style="font-size: 25px;"
                        class="icon-placeholder mdi mdi-minus-box-outline delete_row-tab"></i>
                </td>
            </tr>    
                `;
                console.log(flatcontent);
                var hourappend = $('#flat-rate-content').append(flatcontent);
                validation();
            }
            else if (data.attr('id') == 'contingency-fee-tab-z') {
                console.log('vvvvv');
                var contigencyfees = `  
                <tr class="contingency">
                <td><input type="text" name='product[]'
                    data_type_name="Description" placeholder='Description'
                        class="form-control" /></td>
                <td><input type="number" name='qty[]'
                    data_type_name="qty" placeholder='Win Amount'
                        class="form-control qty contqty"

                        step="0" min="0" />
                    </th>
                <td><input type="number" name='price[]'
                    data_type_name="price"  placeholder='Rate'
                        class="form-control price contprice"
                        step="0.00" min="0" /></td>
                <td><input type="number" name='total[]'
                        placeholder='0.00'
                        class="form-control total conttotal"
                        readonly /></td>
                <td><i style="font-size: 25px; "
                        class="icon-placeholder mdi mdi-minus-box-outline delete_row-tab"></i>
                </td>
            </tr>                                                                                     
               `;
                console.log(contigencyfees);
                var contigencyappend = $('#contingency-fee-content').append(contigencyfees);
                validation();


            }


        });


    });
    validation();


})(window.jQuery);
