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
    //////////////////////////////////start my task coding////////////////////////////////////////////////////////////////////////////////
    /////////////////////////////////json console task/////////////////////////////////////


    $(document).on('click', '.submit_button', function () {
        // console.log(invoiceParticularsArry,'invoiceParticulars submit_button')  
        // $(document).on('click', '#invoice__information', function () {

        var hourlenghtCount = $('#hourly-rate-content tr');
        console.log(hourlenghtCount, 'hour lenght')
        var flatlenghtCount = $('#flat-rate-content tr');
        console.log(flatlenghtCount, 'flat lenght')
        var conlenghtCount = $('#contingency-fee-content tr');
        console.log(conlenghtCount, 'con lenght')
        var invoiceParticularsArry = []
       

        $(hourlenghtCount).each(function (index, value) {
            // console.log($(hourlenghtCount),'ifelsexcbvz');
            console.log(value, 'ifelsexcbvz');//full tr leva

            var description = $(this).children().siblings('td').find('.hourdesc').val();
            console.log(description, 'description');
            var noofhour = $(this).children().siblings('td').find('.hourqty').val();
            console.log(noofhour, ' no of hour');
            var rateperhour = $(this).children().siblings('td').find('.hourprice').val();
            console.log(rateperhour, ' rate per hour');
            var totalhour = $(this).children().siblings('td').find('.hourtotal').val();
            console.log(totalhour, 'total');

            invoiceParticularsArry.push({
                "ratePerHour": rateperhour,
                "description": description,
                "numberOfHours": noofhour,
                "total": totalhour
            });

        });
        /////////////////////////////////////////
        $(flatlenghtCount).each(function (index, value) {
            console.log(value, 'bbbbbbbbbb');

            var descriptionflat = $(this).children().siblings('td').find('.flatdesc').val();
            console.log(descriptionflat, 'description');
            var flatrate = $(this).children().siblings('td').find('.flatprice').val();
            console.log(flatrate, ' no of hour');
            var flattotal = $(this).children().siblings('td').find('.flattotal').val();
            console.log(flattotal, ' no of hour');

            invoiceParticularsArry.push({
                "ratePerHour": flatrate,
                "description": descriptionflat,
                "total": flattotal
            });

        });
        ///////////////////////////////////////////////////////
        $(conlenghtCount).each(function (index, value) {
            console.log(value, 'xxxxxxxxxxxx');


            var descriptioncon = $(this).children().siblings('td').find('.contdesc').val();
            console.log(descriptioncon, 'description');
            var winamount = $(this).children().siblings('td').find('.contqty').val();
            console.log(winamount, ' no of hour');
            var rate = $(this).children().siblings('td').find('.contprice').val();
            console.log(rate, ' rate per hour');
            var totalcont = $(this).children().siblings('td').find('.conttotal').val();
            console.log(totalcont, 'total');

            invoiceParticularsArry.push({
                "ratePerHour": descriptioncon,
                "description": winamount,
                "numberOfHours": rate,
                "total": totalcont
            });

        });

        ////////////////////////////////////////////////////////
         var termsArry = []

         var termsenghtCount = $('#addr01 tr');
         console.log(termsenghtCount, 'terms and condition')

         $(termsenghtCount).each(function (index, value) {
            console.log(value, 'gggggg');

            var termcon= $(this).children().siblings('td').find('.terminput').val();
            console.log(termcon, 'vsdvsd');
           

            termsArry.push(termcon);

        });
        /////////////////////////////////////////////////////////////
        var textArry = []

        var gstsenghtCount = $('#addtax tr');
         console.log(gstsenghtCount, 'gst index length')

         $(gstsenghtCount).each(function (index, value) {
            console.log(value, 'bhjbj');


            var gsttext= $(this).children().siblings('td').find('.tax_row').val();
            console.log(gsttext, 'vsdvsd');

            var gstvalue= $(this).children().siblings('td').find('.tax_value_new').val();
            console.log(gsttext, 'vsdvsd');

            textArry.push({
                    "tax": gsttext,
                    "taxVal": gstvalue,
                });
            

          

        });

       

        ////////////////////////////////////////////////
        var invoice = {
            invoiceDate: $('.invoicedate').val(),
            // invoiceNumber:$('.innumpartone').val()+$('.innumparttwo').val()+$('.innumparthree').val(),
            dueDate: $('.duedate').val(),
            billedByName: $('.byname').val(),
            billedByEmail: $('.byemail').val(),
            billedByCountry: $('.bycountrycode').val(),
            billedByPhoneNum: $('.bymobile').val(),
            billedByAddress: $('.byadd').val(),
            billedToName: $('.toname').val(),
            billedToEmail: $('.toemail').val(),
            billedToPhoneNum: $('.tomobile').val(),
            billedToAddress: $('.toadd').val(),
            billedToCountryCode: $('.tocountry').val(),
            termsAndConditions: termsArry,
            notes: $('.notes').val(),
            subTotal: $('.subtotal').val(),
            netTax: $('.tax').val(),
            netTotal: $('.grandtotal').val(),
            currency: $('.curr').val(),
            invoiceParticulars: invoiceParticularsArry,
            contactEmailId: $('.contemail').val(),
            contactPhoneNum: $('.contmobile').val(),
            taxDetails: textArry
            // updatedBy: $('.contemail').val(),
        };
        console.log(invoice);










    })

    /////////////////////////////validation all input box start////////////////////
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
            else if (this.value < 0) {
                console.log('jjjjjj')

                $(this).next("span").remove();
                $(this).after('<span class="error">' + main + ' is a negetive value.Enter positive value .</span>')
            }
            // else if ($.isNumeric(this.value) == false) {
            //     console.log('sss')

            //     $(this).next("span").remove();
            //     $(this).after('<span class="error">' + main + ' is string .Please enter positive  number.</span>')
            // }
            else {
                console.log('xxxx');

                $(this).next("span").remove();
                console.log($(this).next("span"));


            }
        })

    }
    /////////////////////////////////validation end////////////////////////////////////////////////
    ////////////////////hour counting funaction//////////////////////////
    // var invoiceParticularsArry=[]

    function hour(hourqty, hourprice, gethor) {

        var totalhours = hourqty * hourprice;
        console.log($(this), 'hjkhkjhkj');

        gethor.closest('td').siblings().find('.hourtotal').val(totalhours);


        // invoiceParticularsArry.push({ "ratePerHour": hourprice,
        // "description": "Add",
        // "numberOfHours": hourqty,
        // "total": totalhours});
        // invoiceParticulars.push($(hourqty).val());
        // invoiceParticulars.push($(gethor).val());

        var subtotalhour = 0;
        $(".hourtotal").each(function (index, value) {
            subtotalhour += Number($(this).val());

        });


        var taxoutput = 0
        $(".tax_row").each(function (index, value) {
            taxoutput += Number($(this).val());

        });
        /////if taxbox value change automatically chnage tax in value////
        $(".tax_row").each(function (index, value) {

            console.log($(this).val(), 'subTotalforTax');
            var subfinalTax = (subtotalhour * $(this).val()) / 100;
            $(this).closest('td').siblings().find('.tax_value_new').val(subfinalTax);


        });
        ///////////////////////////////////////
        console.log(subtotalhour, 'total sum');

        // console.log(invoiceParticularsArry,'invoiceParticulars')
        calculation(subtotalhour, taxoutput);


    }
    //////////////////////////////////contigency fees countion function//////////////////
    // var  invoiceconArry=[]

    function contingency(contqty, contprice, getthis) {

        var totalcont = contqty * contprice / 100;

        getthis.closest('td').siblings().find('.conttotal').val(totalcont);

        var subtotalcont = 0;
        $(".conttotal").each(function (index, value) {
            subtotalcont += Number($(this).val());

        });

        var taxoutput = 0
        $(".tax_row").each(function (index, value) {
            taxoutput += Number($(this).val());

        });

        $(".tax_row").each(function (index, value) {

            console.log($(this).val(), 'subTotalforTax');
            var subfinalTax = (subtotalcont * $(this).val()) / 100;
            var store = $(this).closest('td').siblings().find('.tax_value_new').val(subfinalTax);


        });

        console.log(subtotalcont, 'total sum');
        var tax = $('.tax_row').val();
        calculation(subtotalcont, taxoutput);


    }
    /////////////////////////final invoie calculation funcation/////////////////

    function calculation(subtotal, tax) {

        $('#sub_total').val(subtotal);
        var total_tax = subtotal * tax / 100;

        var tax_amount_ouput = 0
        $(".tax_value_new").each(function (index, value) {
            tax_amount_ouput += Number($(this).val());

        });
        console.log(tax_amount_ouput)

        $('#tax_amount').val(tax_amount_ouput);

        $('#Grand_total').val(subtotal + tax_amount_ouput);
    }
    /////////////////////////////gst tax json////////////////////////
    // function gst(gstper,value)
    // {
    //     $(".tax_row").each(function (index, value) {

    //         console.log($(this).val(), 'subTotalforTax');
    //         var subfinalTax = (subtotalcont * $(this).val()) / 100;
    //         $(this).closest('td').siblings().find('.tax_value_new').val(subfinalTax);

    //     });
    // }
    ///////////////////////////////////////  All functions  completed/////////////////////////////////////////////
    //////////////////////////// Onblur all button  start /////////////////////////////////
    ////////////////////////////tax input box change////////////////////////////////////
    // var textArry = []
    $(document).on('blur', '.tax_row', function () {

        var data = $('#myTab li .active');

        console.log("change tax");
        console.log(data.attr('id'));
        if (data.attr('id') == 'hourly-tab-z') {

            var subtotalhour = 0;
            $(".hourtotal").each(function (index, value) {
                subtotalhour += Number($(this).val());

            });

            var gettax = $(this).val();
            var finalTax = (subtotalhour * gettax) / 100;

            $(this).closest('td').siblings().find('.tax_value_new').val(finalTax);

            // textArry.push({
            //     "tax": gettax,
            //     "taxVal": finalTax,
            // });

            let tax = 0
            $(".tax_value_new").each(function (index, value) {
                tax += Number($(this).val());

            });

            console.log(subtotalhour, 'total sum');
            calculation(subtotalhour, tax);

        }
        else if (data.attr('id') == 'flat-rate-tab-z') {

            var subtotalflat = 0;
            $(".flattotal").each(function (index, value) {
                subtotalflat += Number($(this).val());

            });

            var gettax = $(this).val();
            var finalTax = (subtotalflat * gettax) / 100;

            $(this).closest('td').siblings().find('.tax_value_new').val(finalTax);

            textArry.push({
                "tax": gettax,
                "taxVal": finalTax,
            });

            let tax = 0
            $(".tax_value_new").each(function (index, value) {
                tax += Number($(this).val());

            });

            calculation(subtotalflat, tax);

        }
        else if (data.attr('id') == 'contingency-fee-tab-z') {

            var subtotalcont = 0;
            $(".conttotal").each(function (index, value) {
                subtotalcont += Number($(this).val());

            });

            var gettax = $(this).val();
            var finalTax = (subtotalcont * gettax) / 100;

            $(this).closest('td').siblings().find('.tax_value_new').val(finalTax);

            textArry.push({
                "tax": gettax,
                "taxVal": finalTax,
            });

            let tax = 0
            $(".tax_value_new").each(function (index, value) {
                tax += Number($(this).val());

            });
            console.log(subtotalcont, 'total sum');

            calculation(subtotalcont, tax);
        }
    })


    ///////////////////////////////end tax////////////////////////////////   
    ///////////////////////////delete button code start//////////////////////
    ///////////////////delte_row//////////////////
    $(document).on('click', '.delete_row', function () {

        $(this).closest('.term').remove();

    })
    //////////delete-row tab////////////////////////////////
    $(document).on('click', '.delete_row-tab', function () {
        console.log('delete');
        $(this).closest('.hourly').remove();
        $(this).closest('.flat').remove();
        $(this).closest('.contingency').remove();
        $(this).closest('.tax_con').remove();
        $(this).closest('.term').remove();

        var data = $('#myTab li .active');

        console.log(data.attr('id'));

        var subtotalhour = 0;
        if (data.attr('id') == 'hourly-tab-z') {

            $(".hourtotal").each(function (index, value) {
                subtotalhour += Number($(this).val());
            });
            /////////////////if delete wow automatically tax in value change//////////////////////////
            $(".tax_row").each(function (index, value) {

                console.log($(this).val(), 'subTotalforTax');
                var subfinalTax = (subtotalhour * $(this).val()) / 100;
                $(this).closest('td').siblings().find('.tax_value_new').val(subfinalTax);

            });
            /////////////////////////////////////////////////////////////////////////          
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

    });
    /////////////////////////hourprice on blur////////////////////////////
    var hourpricevalue
    var hourqtyvalue
    var hourdiscription

    $(document).on('blur', '.hourprice', function () {

        console.log(".hourprice");
        hourpricevalue = $(this).val();
        console.log(hourpricevalue);
        hourqtyvalue = $(this).closest('td').siblings().find('.hourqty').val();

        hourdiscription = $(this).closest('td').siblings().find('.hourdesc').val();
        console.log(hourdiscription, 'HOUR ');

        var getthor = $(this);
        hour(hourqtyvalue, hourpricevalue, getthor);

        var totalhoursval = $(this).closest('td').siblings().find('.hourtotal').val();


        // invoiceParticularsArry.push({ "ratePerHour": hourpricevalue,
        // "description": hourdiscription,
        // "numberOfHours": hourqtyvalue,
        // "total": totalhoursval});

    });
    /////////////////flat counting start ////////////////////////////
    // var invoiceFlatArry=[]
    var flatpricevalue
    var total_flat
    var total_flat_total
    var flatdescription

    $(document).on('blur', '.flatprice', function () {


        flatpricevalue = $(this).val();
        total_flat = flatpricevalue;
        total_flat_total = ($(this).closest('td').siblings().find('.flattotal').val(total_flat));
        flatdescription = $(this).closest('td').siblings().find('.flatdesc').val();
        console.log(flatdescription, ' flat desc');

        var subtotalflat = 0;
        $(".flattotal").each(function (index, value) {
            subtotalflat += Number($(this).val());

        });

        var taxoutput = 0
        $(".tax_row").each(function (index, value) {
            taxoutput += Number($(this).val());

        });
        $(".tax_row").each(function (index, value) {

            var subfinalTax = (subtotalflat * $(this).val()) / 100;
            $(this).closest('td').siblings().find('.tax_value_new').val(subfinalTax);


        });

        calculation(subtotalflat, taxoutput);

        var flattotal = ($(this).closest('td').siblings().find('.flattotal').val())

        // invoiceFlatArry.push({ "flatrate": flatpricevalue,
        // "description": flatdescription,
        // "total": flattotal});


    });
    ////////////////////////////cont start//////////////////////////////
    //////////////////cont on conyqty blur///////////////////////////////
    var contqtyvalue
    var contpricevalue
    // var contdescription
    $(document).on('blur', '.contqty', function () {

        console.log(".contqty");
        contqtyvalue = $(this).val();
        console.log(contqtyvalue, 'contqty');
        contpricevalue = $(this).closest('td').siblings().find('.contprice').val();
        console.log(contpricevalue, 'price');
        // contdescription= $(this).closest('td').siblings().find('.contdesc').val();
        // console.log(contdescription,'contdescription')



        var getParent = $(this);
        contingency(contpricevalue, contqtyvalue, getParent);

        // getthis.closest('td').siblings().find('.conttotal').val(totalcont);



    });
    //////////////////cont on conyprice blure///////////////////////////////
    var contpricevalue
    var contqtyvalue
    var contdescription

    $(document).on('blur', '.contprice', function () {

        console.log(".contprice");
        contpricevalue = $(this).val();
        console.log(contpricevalue, 'contprice');
        contqtyvalue = $(this).closest('td').siblings().find('.contqty').val();
        console.log(contqtyvalue, 'contqty');
        contdescription = $(this).closest('td').siblings().find('.contdesc').val();
        console.log(contdescription, 'contdescription')

        var getParent = $(this);
        contingency(contpricevalue, contqtyvalue, getParent);
        var totalcontval = $(this).closest('td').siblings().find('.conttotal').val();


        // invoiceconArry.push({
        //     "winamount": contqtyvalue,
        //     "description": contdescription,
        //     "rate": contpricevalue,
        //     "total": totalcontval
        // });

    });
    // //////////////////////////////////term and condition textbox on blur////////////////////////////////////////
    // var termsArry = []
    // var terandcondition

    // $(document).on('blur', '.terminput', function () {

    //     terandcondition = $(this).val();
    //     console.log(terandcondition, 'termscontent');

    //     termsArry.push(terandcondition);
    // })

    ///////////////////////////////subtotal/////////////////////////////
    $(document).on('click', '.invoiceUl', function () {

        var data = $('#myTab li .active');
        console.log(data.attr('id'));
        console.log("called this");

        if (data.attr('id') == 'hourly-tab-z') {

            $('#flat-rate-content tr').remove();
            $('#contingency-fee-content tr').remove();
            $('#addtax tr').remove();

        }
        else if (data.attr('id') == 'flat-rate-tab-z') {

            $('#hourly-rate-content tr').remove();
            $('#contingency-fee-content tr').remove();
            $('#addtax tr').remove();

        }
        else if (data.attr('id') == 'contingency-fee-tab-z') {

            $('#hourly-rate-content tr').remove();
            $('#flat-rate-content tr').remove();
            $('#addtax tr').remove();

        }
        ///////// if one tab active all list data is null///
        $('.tax_row').val('');
        $('.subtotal').val('');
        $('.tax_value_new').val('');
        $('#tax_amount').val('');
        $('#Grand_total').val('');
    });


    //////////////////////////////////////////append add row /////////////////////////
    $(document).ready(function () {
        $("#add_row").click(function () {

            var data = $('#myTab li .active');

            if (data.attr('id') == 'hourly-tab-z') {
                console.log('hhhhh');
                var houcontent = `
                <tr class="hourly">
                <td><input type="text" name='product[]'
                    data_type_name="Description"  placeholder='Description'
                        class="form-control hourdesc" /></td>
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

                var hourappend = $('#hourly-rate-content').append(houcontent);

                validation();

            }
            else if (data.attr('id') == 'flat-rate-tab-z') {

                var flatcontent = `                                                                           
                <tr class="flat">
                <td><input type="text" name='product[]'
                    data_type_name="Description" placeholder='Description'
                        class="form-control flatdesc" /></td>
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

                var flatappend = $('#flat-rate-content').append(flatcontent);
                validation();
            }
            else if (data.attr('id') == 'contingency-fee-tab-z') {

                var contigencyfees = `  
                <tr class="contingency">
                <td><input type="text" name='product[]'
                    data_type_name="Description " placeholder='Description'
                        class="form-control contdesc" /></td>
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
                     placeholder="Tax" data_type_name="tax" class="form-control tax_row ">
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

            $('#addtax').append(taxaxcontent);

            validation();
        })

        ////////////////////////////////////////////////////////////
        /////////////////add abutton term and condition append//////////
        $("#add_row2").click(function () {

            var termscontent = `
             <tr id='' class="term">
            <td><input type="text" name='product[]'
                    placeholder='Terms' class="form-control terminput" /></td>
            <td><i style="font-size: 25px; "
                    class="icon-placeholder mdi mdi-minus-box-outline delete_row"></i>
            </td>
            </tr> 
                `;

            $('#addr01').append(termscontent);

            // validation();
        })
        
    });




})(window.jQuery);


