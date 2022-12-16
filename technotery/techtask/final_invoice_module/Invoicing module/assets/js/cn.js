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


        var taxoutput = 0
        $(".taxone").each(function (index, value) {
            taxoutput += Number($(this).val());

        });
        $(".tax_row").each(function (index, value) {
            
            console.log($(this).val(),'subTotalforTax');
            var subfinalTax = (subtotalhour * $(this).val()) / 100;
            $(this).closest('td').siblings().find('.tax_value_new').val(subfinalTax);


        });
        // var tax = $('.tax_row').val();
        // if (tax == "") {
        //     var tax = $('.tax_row').val()
        // }
        console.log(subtotalhour, 'total sum');
        // var tax=$('.tax_row').val();
        calculation(subtotalhour,taxoutput );


    }

    function contingency(contqty, contprice, getthis) {

        var totalcont = contqty * contprice / 100;
        // console.log(getParent,'getParent');
        getthis.closest('td').siblings().find('.conttotal').val(totalcont);

        var subtotalcont = 0;
        $(".conttotal").each(function (index, value) {
            subtotalcont += Number($(this).val());

        });

        var taxoutput = 0
        $(".taxone").each(function (index, value) {
            taxoutput += Number($(this).val());

        });
        $(".tax_row").each(function (index, value) {
            
            console.log($(this).val(),'subTotalforTax');
            var subfinalTax = (subtotalcont * $(this).val()) / 100;
            $(this).closest('td').siblings().find('.tax_value_new').val(subfinalTax);


        });
        console.log(subtotalcont, 'total sum');
        var tax = $('.tax_row').val();
        calculation(subtotalcont, taxoutput);
    }


    function calculation(subtotal, tax) {
        // console.log(subtotal,'subtotal');
        $('#sub_total').val(subtotal);
        var total_tax = subtotal * tax / 100;

        var  tax_amount_ouput = 0
        $(".tax_value_new").each(function (index, value) {
            tax_amount_ouput += Number($(this).val());

        });
        console.log(tax_amount_ouput)

        $('#tax_amount').val(tax_amount_ouput);
        console.log(total_tax, 'tax');
        // $('.tax_value_new').val(total_tax);
        $('#Grand_total').val(subtotal + tax_amount_ouput);
    }

    ////////////////////////////tax button change////////////////////////////////////

    $(document).on('blur', '.tax_row', function () {

        var data = $('#myTab li .active');
        // console.log(data.attr('id'));
        console.log("change tax");
        console.log(data.attr('id'));
        if (data.attr('id') == 'hourly-tab-z') {

            var subtotalhour = 0;
            $(".hourtotal").each(function (index, value) {
                subtotalhour += Number($(this).val());

            });
            var gettax = $(this).val();
            var finalTax = (subtotalhour * gettax) / 100;

            /*  console.log('gettax',gettax);
             console.log('subtotalhoursubtotalhoursubtotalhoursubtotalhour',finalTax);
             console.log($(this).closest('td').siblings().find('.tax_value_new').val(finalTax)); */
            $(this).closest('td').siblings().find('.tax_value_new').val(finalTax);


            let tax = 0
            $(".tax_value_new").each(function (index, value) {
                tax += Number($(this).val());

            });

            console.log(subtotalhour, 'total sum');
            // var tax=$('.tax_row').val();
            calculation(subtotalhour, tax);



        }
        else if (data.attr('id') == 'flat-rate-tab-z') {


            var subtotalflat = 0;
            $(".flattotal").each(function (index, value) {
                subtotalflat += Number($(this).val());

            });

            var gettax = $(this).val();
            var finalTax = (subtotalflat * gettax) / 100;

            /*  console.log('gettax',gettax);
             console.log('subtotalhoursubtotalhoursubtotalhoursubtotalhour',finalTax);
             console.log($(this).closest('td').siblings().find('.tax_value_new').val(finalTax)); */
            $(this).closest('td').siblings().find('.tax_value_new').val(finalTax);


            let tax = 0
            $(".tax_value_new").each(function (index, value) {
                tax += Number($(this).val());

            });
            // var flattax=$('.tax_row').val();
            // console.log(flattax, 'tax((((((((((((((((((');
            calculation(subtotalflat, tax);



        }
        else if (data.attr('id') == 'contingency-fee-tab-z') {


            var subtotalcont = 0;
            $(".conttotal").each(function (index, value) {
                subtotalcont += Number($(this).val());

            });

            var gettax = $(this).val();
            var finalTax = (subtotalcont * gettax) / 100;

            /*  console.log('gettax',gettax);
             console.log('subtotalhoursubtotalhoursubtotalhoursubtotalhour',finalTax);
             console.log($(this).closest('td').siblings().find('.tax_value_new').val(finalTax)); */
            $(this).closest('td').siblings().find('.tax_value_new').val(finalTax);


            let tax = 0
            $(".tax_value_new").each(function (index, value) {
                tax += Number($(this).val());

            });
            console.log(subtotalcont, 'total sum');
            // var tax=$('.tax_row').val();
            calculation(subtotalcont, tax);
        }
    })


    ///////////////////////////////end tax////////////////////////////////


    function validation() {

        $("input").blur(function () {
            
            var main = $(this).attr('data_type_name');
            console.log('input');
            console.log($.isNumeric(this.value));
            if (this.value == "") {
                console.log('zzzz')

                $(this).next("span").remove();
                $(this).after('<span class="error">' + main + ' is required.</span>')
            }
            else if(this.value < 0)
            {
                console.log('jjjjjj')

                $(this).next("span").remove();
                $(this).after('<span class="error">' + main + ' is a negetive value.Enter positive value .</span>')
            }
            else if($.isNumeric(this.value) == false)
            {
                console.log('sss')

                $(this).next("span").remove();
                $(this).after('<span class="error">' + main + ' Please enter number.</span>')
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
        $(this).closest('.hourly').remove();
        $(this).closest('.flat').remove();
        $(this).closest('.contingency').remove();

        var deletedtaxhour = $(this).closest('.tax_con').remove();

        var data = $('#myTab li .active');
        console.log(data.attr('id'));

        var subtotalhour = 0;
        if (data.attr('id') == 'hourly-tab-z') {

            $(".hourtotal").each(function (index, value) {
                subtotalhour += Number($(this).val());

            });
			 $(".tax_row").each(function (index, value) {

                console.log($(this).val(), 'subTotalforTax');
                var subfinalTax = (subtotalhour * $(this).val()) / 100;
                $(this).closest('td').siblings().find('.tax_value_new').val(subfinalTax);
    
            });
        }
        else if (data.attr('id') == 'flat-rate-tab-z') {


            $(".flattotal").each(function (index, value) {
                subtotalhour += Number($(this).val());

            });
			 $(".tax_row").each(function (index, value) {

                console.log($(this).val(), 'subTotalforTax');
                var subfinalTax = (subtotalhour * $(this).val()) / 100;
                $(this).closest('td').siblings().find('.tax_value_new').val(subfinalTax);
    
            });

        }
        else if (data.attr('id') == 'contingency-fee-tab-z') {


            $(".conttotal").each(function (index, value) {
                subtotalhour += Number($(this).val());

            });
			 $(".tax_row").each(function (index, value) {

                console.log($(this).val(), 'subTotalforTax');
                var subfinalTax = (subtotalhour * $(this).val()) / 100;
                $(this).closest('td').siblings().find('.tax_value_new').val(subfinalTax);
    
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

//////
        // var gettax = $(this).val();
        // var finalTax = (subtotalhour * gettax) / 100;
        // $(this).closest('td').siblings().find('.tax_value_new').val(finalTax);

        // let tax = 0
        // $(".tax_value_new").each(function (index, value) {
        //     tax += Number($(this).val());

        // });
        // console.log(subtotalcont, 'total sum');
        // // var tax=$('.tax_row').val();
        // calculation(subtotalcont, tax);

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
        // var flattax = $('.tax_row').val();
        // if (flattax == "") {
        //     $('.tax_row').val();
        // }

        var taxoutput = 0
        $(".taxone").each(function (index, value) {
            taxoutput += Number($(this).val());

        });
        $(".tax_row").each(function (index, value) {
            
            console.log($(this).val(),'subTotalforTax');
            var subfinalTax = (subtotalflat * $(this).val()) / 100;
            $(this).closest('td').siblings().find('.tax_value_new').val(subfinalTax);


        });

        console.log(subtotalflat, 'total sum');
        // var flattax=$('.tax_row').val();
        console.log(taxoutput, 'tax((((((((((((((((((');
        calculation(subtotalflat, taxoutput);


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
        console.log("called this");

        if (data.attr('id') == 'hourly-tab-z') {
            var rowCountflat = $('#flat-rate-content tr');
            console.log(rowCountflat)
            $(rowCountflat).remove();
            var rowCountcont = $('#contingency-fee-content tr');
            console.log(rowCountcont)
            $(rowCountcont).remove();

            $('#addtax tr').remove();

        }
        else if (data.attr('id') == 'flat-rate-tab-z') {


            $('#hourly-rate-content tr').remove();
            // console.log(rowCounthour)
            // $(rowCounthour).remove();

            $('#contingency-fee-content tr').remove();
            console.log(rowCountcont)
            $(rowCountcont).remove();
            $('#addtax tr').remove();



        }
        else if (data.attr('id') == 'contingency-fee-tab-z') {

            $('#hourly-rate-content tr').remove();
            // console.log(rowCountcont)
            // $(rowCountcont).remove();
            $('#flat-rate-content tr').remove();
            // console.log(rowCountcont)
            // $(rowCountflat).remove();
            $('#addtax tr').remove();

        }




        $('.tax_row').val('');
        $('.subtotal').val('');
        $('.tax_value_new').val('');
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
                // console.log(houcontent);
                var hourappend = $('#hourly-rate-content').append(houcontent);
                // console.log(hourappend);
                validation();
                // var rowCountflat = $('#flat-rate-content tr').length;
                // console.log(rowCountflat)
                // var rowCountcont = $('#contingency-fee-content tr').length;
                // console.log(rowCountcont)
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
                // console.log(flatcontent);
                var flatappend = $('#flat-rate-content').append(flatcontent);
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
                // console.log(contigencyfees);
                var contigencyappend = $('#contingency-fee-content').append(contigencyfees);
                validation();


            }


        });

        //////////////////////add tax append///////////////////////////////
        $("#add").click(function () {
            var taxaxcontent = `
                <tr id="table_rows_0" class="tax_con">
                <td>
                    <input type="text" name="GST_total"
                     placeholder="Tax" data_type_name="tax" class="form-control tax_row taxone">
                </td>
                <td>
                <input type="number" name="GST_total" placeholder="0.00" class="form-control tax_value tax_value_new" readonly="">

                    
                </td>
                <td>
                    <i style="font-size: 25px;"
                        class="icon-placeholder mdi mdi-minus-box-outline deleterow delete_row-tab "></i>
                </td>
            </tr>
                `;
            // console.log(taxaxcontent);
            $('#addtax').append(taxaxcontent);
            // // console.log(hourappend);
            validation();
        })
        
        //////////////////////////////////////////////////////////

    });
    // validation();


})(window.jQuery);
