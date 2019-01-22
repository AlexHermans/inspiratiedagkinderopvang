(function($) {
  $(document).ready(function(){

    //show en hide animatie
    $('.helper button').click(function(){
      $('.registration_information').css('display', 'flex')
      $('.overlay').fadeIn('fast', function(){
        $('.reg_info').animate({
          top: 0,
          opacity: 1
        }, 300)
      })
    })
    $('.overlay').click(function(){
      if ($(this) !== $('.reg_info')){
        $('.reg_info').animate({
          top: '3vh',
          opacity: 0,
        }, 300, function(){
          $('.overlay').fadeOut('fast', function(){
            $('.registration_information').hide();
          })
        })
      }
    })

    //ophalen van het programma
    var programma = {
      onthaal : {
        titel : $('.ronde_onthaal').find('.session_title').text(),
        uur : $('.ronde_onthaal').find('.session_time').text()
      },
      ronde_1 : {
        titel : $('.ronde_1').find('.session_title').text(),
        uur : $('.ronde_1').find('.session_time').text()
      },
      ronde_2 : {
        titel : $('.ronde_2').find('.session_title').text(),
        uur : $('.ronde_2').find('.session_time').text()
      },
      middag : {
        titel : $('.ronde_middag').find('.session_title').text(),
        uur : $('.ronde_middag').find('.session_time').text()
      },
      ronde_3 : {
        titel : $('.ronde_3').find('.session_title').text(),
        uur : $('.ronde_3').find('.session_time').text()
      },
      plenair : {
        titel : $('.ronde_plenair').find('.session_title').text(),
        uur : $('.ronde_plenair').find('.session_time').text()
      },
    receptie : {
        titel : $('.ronde_receptie').find('.session_title').text(),
        uur : $('.ronde_receptie').find('.session_time').text()
      }
    }

    var programma_html = ''

    $.each(programma, function(){
      var td_elements = ''
      var tr_elements = ''

      $.each(this, function(){
        td_elements += '<td>'+this.trim()+'</td>'
      });

      tr_elements += '<tr>'+td_elements+'</tr>';
      programma_html += tr_elements;
    })

    programma_html = '<table>'+programma_html+'</table>'

    // doorsturen van gegevens
    $('#enroll_all').on('click', function(){
      var voornaam = $('.reg_info input#voornaam').val();
      var achternaam = $('.reg_info input#achternaam').val();
      var to = $('.reg_info input#e-mail').val();
      var subject = 'Bevestiging inschrijving voor de Inspiratiekinderopvang'
      var body = '<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional //EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office"><head><!--[if gte mso 9]><xml> <o:OfficeDocumentSettings> <o:AllowPNG/> <o:PixelsPerInch>96</o:PixelsPerInch> </o:OfficeDocumentSettings> </xml><![endif]--> <meta http-equiv="Content-Type" content="text/html; charset=utf-8"> <meta name="viewport" content="width=device-width"> <meta http-equiv="X-UA-Compatible" content="IE=edge"> <title></title> <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet" type="text/css"> <style type="text/css" id="media-query"> body{margin: 0; padding: 0;}table, tr, td{vertical-align: top; border-collapse: collapse;}.ie-browser table, .mso-container table{table-layout: fixed;}*{line-height: inherit;}a[x-apple-data-detectors=true]{color: inherit !important; text-decoration: none !important;}[owa] .img-container div, [owa] .img-container button{display: block !important;}[owa] .fullwidth button{width: 100% !important;}[owa] .block-grid .col{display: table-cell; float: none !important; vertical-align: top;}.ie-browser .num12, .ie-browser .block-grid, [owa] .num12, [owa] .block-grid{width: 500px !important;}.ExternalClass, .ExternalClass p, .ExternalClass span, .ExternalClass font, .ExternalClass td, .ExternalClass div{line-height: 100%;}.ie-browser .mixed-two-up .num4, [owa] .mixed-two-up .num4{width: 164px !important;}.ie-browser .mixed-two-up .num8, [owa] .mixed-two-up .num8{width: 328px !important;}.ie-browser .block-grid.two-up .col, [owa] .block-grid.two-up .col{width: 250px !important;}.ie-browser .block-grid.three-up .col, [owa] .block-grid.three-up .col{width: 166px !important;}.ie-browser .block-grid.four-up .col, [owa] .block-grid.four-up .col{width: 125px !important;}.ie-browser .block-grid.five-up .col, [owa] .block-grid.five-up .col{width: 100px !important;}.ie-browser .block-grid.six-up .col, [owa] .block-grid.six-up .col{width: 83px !important;}.ie-browser .block-grid.seven-up .col, [owa] .block-grid.seven-up .col{width: 71px !important;}.ie-browser .block-grid.eight-up .col, [owa] .block-grid.eight-up .col{width: 62px !important;}.ie-browser .block-grid.nine-up .col, [owa] .block-grid.nine-up .col{width: 55px !important;}.ie-browser .block-grid.ten-up .col, [owa] .block-grid.ten-up .col{width: 50px !important;}.ie-browser .block-grid.eleven-up .col, [owa] .block-grid.eleven-up .col{width: 45px !important;}.ie-browser .block-grid.twelve-up .col, [owa] .block-grid.twelve-up .col{width: 41px !important;}@media only screen and (min-width: 520px){.block-grid{width: 500px !important;}.block-grid .col{vertical-align: top;}.block-grid .col.num12{width: 500px !important;}.block-grid.mixed-two-up .col.num4{width: 164px !important;}.block-grid.mixed-two-up .col.num8{width: 328px !important;}.block-grid.two-up .col{width: 250px !important;}.block-grid.three-up .col{width: 166px !important;}.block-grid.four-up .col{width: 125px !important;}.block-grid.five-up .col{width: 100px !important;}.block-grid.six-up .col{width: 83px !important;}.block-grid.seven-up .col{width: 71px !important;}.block-grid.eight-up .col{width: 62px !important;}.block-grid.nine-up .col{width: 55px !important;}.block-grid.ten-up .col{width: 50px !important;}.block-grid.eleven-up .col{width: 45px !important;}.block-grid.twelve-up .col{width: 41px !important;}}@media (max-width: 520px){.block-grid, .col{min-width: 320px !important; max-width: 100% !important; display: block !important;}.block-grid{width: calc(100% - 40px) !important;}.col{width: 100% !important;}.col > div{margin: 0 auto;}img.fullwidth, img.fullwidthOnMobile{max-width: 100% !important;}.no-stack .col{min-width: 0 !important; display: table-cell !important;}.no-stack.two-up .col{width: 50% !important;}.no-stack.mixed-two-up .col.num4{width: 33% !important;}.no-stack.mixed-two-up .col.num8{width: 66% !important;}.no-stack.three-up .col.num4{width: 33% !important;}.no-stack.four-up .col.num3{width: 25% !important;}.mobile_hide{min-height: 0px; max-height: 0px; max-width: 0px; display: none; overflow: hidden; font-size: 0px;}}</style></head><body class="clean-body" style="margin: 0;padding: 0;-webkit-text-size-adjust: 100%;background-color: #FFFFFF"> <style type="text/css" id="media-query-bodytag"> @media (max-width: 520px){.block-grid{min-width: 320px!important; max-width: 100%!important; width: 100%!important; display: block!important;}.col{min-width: 320px!important; max-width: 100%!important; width: 100%!important; display: block!important;}.col > div{margin: 0 auto;}img.fullwidth{max-width: 100%!important;}img.fullwidthOnMobile{max-width: 100%!important;}.no-stack .col{min-width: 0!important;display: table-cell!important;}.no-stack.two-up .col{width: 50%!important;}.no-stack.mixed-two-up .col.num4{width: 33%!important;}.no-stack.mixed-two-up .col.num8{width: 66%!important;}.no-stack.three-up .col.num4{width: 33%!important;}.no-stack.four-up .col.num3{width: 25%!important;}.mobile_hide{min-height: 0px!important; max-height: 0px!important; max-width: 0px!important; display: none!important; overflow: hidden!important; font-size: 0px!important;}}</style> <table class="nl-container" style="border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;min-width: 320px;Margin: 0 auto;background-color: #FFFFFF;width: 100%" cellpadding="0" cellspacing="0"><tbody><tr style="vertical-align: top"><td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top"> <div style="background-color:transparent;"> <div style="Margin: 0 auto;min-width: 320px;max-width: 500px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: transparent;" class="block-grid "> <div style="border-collapse: collapse;display: table;width: 100%;background-color:transparent;"> <div class="col num12" style="min-width: 320px;max-width: 500px;display: table-cell;vertical-align: top;"> <div style="background-color: transparent; width: 100% !important;"> <div style="border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent; padding-top:5px; padding-bottom:0px; padding-right: 0px; padding-left: 0px;"> <div align="center" class="img-container center fullwidthOnMobile fixedwidth " style="padding-right: 0px; padding-left: 0px;"></div></div></div></div></div></div></div><div style="background-color:#53B2D7;"> <div style="Margin: 0 auto;min-width: 320px;max-width: 500px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: transparent;" class="block-grid "> <div style="border-collapse: collapse;display: table;width: 100%;background-color:transparent;"> <div class="col num12" style="min-width: 320px;max-width: 500px;display: table-cell;vertical-align: top;"> <div style="background-color: transparent; width: 100% !important;"> <div style="border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent; padding-top:5px; padding-bottom:5px; padding-right: 0px; padding-left: 0px;"> <div class=""><div style="color:#555555;line-height:120%;font-family:"Source Sans Pro", Tahoma, Verdana, Segoe, sans-serif; padding-right: 30px; padding-left: 30px; padding-top: 30px; padding-bottom: 30px;"><div style="font-size:12px;line-height:14px;font-family:"Source Sans Pro", Tahoma, Verdana, Segoe, sans-serif;color:#555555;text-align:left;"><p style="margin: 0;font-size: 14px;line-height: 17px;text-align: center"><span style="font-size: 28px; line-height: 33px; color: rgb(255, 255, 255);"><strong><span style="line-height: 33px; font-size: 28px;">Inschrijving bevestigd!</span></strong></span></p></div></div></div></div></div></div></div></div></div><div style="background-color:transparent;"> <div style="Margin: 0 auto;min-width: 320px;max-width: 500px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: transparent;" class="block-grid "> <div style="border-collapse: collapse;display: table;width: 100%;background-color:transparent;"> <div class="col num12" style="min-width: 320px;max-width: 500px;display: table-cell;vertical-align: top;"> <div style="background-color: transparent; width: 100% !important;"> <div style="border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent; padding-top:0px; padding-bottom:0px; padding-right: 0px; padding-left: 0px;"> <div class=""><div style="color:#555555;line-height:150%;font-family:"Source Sans Pro", Tahoma, Verdana, Segoe, sans-serif; padding-right: 25px; padding-left: 25px; padding-top: 25px; padding-bottom: 25px;"><div style="font-size:12px;line-height:18px;color:#555555;font-family:"Source Sans Pro", Tahoma, Verdana, Segoe, sans-serif;text-align:left;"><p style="margin: 0;font-size: 14px;line-height: 21px"><span style="font-size: 16px; line-height: 24px;">Beste '+voornaam+' '+achternaam+' ,</span></p><p style="margin: 0;font-size: 14px;line-height: 21px"><span style="font-size: 16px; line-height: 24px;">&#160;</span></p><p style="margin: 0;font-size: 14px;line-height: 21px"><span style="font-size: 16px; line-height: 24px;"><strong><span style="line-height: 24px; font-size: 16px;">Bedankt voor je inschrijving op de inspiratiedag kinderopvang op 30 april 2019!</span></strong></span></p><p style="margin: 0;font-size: 14px;line-height: 21px"><span style="font-size: 16px; line-height: 24px;">&#160;</span></p><p style="margin: 0;font-size: 14px;line-height: 21px"><span style="font-size: 16px; line-height: 24px;">Je krijgt zo snel mogelijk van ons een bevestigingsmail.</span></p>'+programma_html+'</div></div></div><div class=""><div style="color:#555555;line-height:120%;font-family:"Source Sans Pro", Tahoma, Verdana, Segoe, sans-serif; padding-right: 10px; padding-left: 10px; padding-top: 10px; padding-bottom: 10px;"><div style="font-size:12px;line-height:14px;color:#555555;font-family:"Source Sans Pro", Tahoma, Verdana, Segoe, sans-serif;text-align:left;"><p style="margin: 0;font-size: 14px;line-height: 17px"><em><span style="font-size: 11px; line-height: 13px;">Opgelet: het kan zijn dat je nog een bijkomende mail krijgt met de vraag voor bijkomende informatie. In dat geval is je registratie nog niet volledig in orde en moet je eerst de gegevens verschaffen. Je krijgt deze mail <span style="line-height: 13px; font-size: 11px;">omdat</span> je je hebt ingeschreven voor de Inspiratiedag van Kinderopvang (onderdeel van VVSG v.z.w).</span></em></p></div></div></div><div class=""><div style="color:#555555;line-height:150%;font-family:"Source Sans Pro", Tahoma, Verdana, Segoe, sans-serif; padding-right: 45px; padding-left: 45px; padding-top: 45px; padding-bottom: 45px;"><div style="font-size:12px;line-height:18px;color:#555555;font-family:"Source Sans Pro", Tahoma, Verdana, Segoe, sans-serif;text-align:left;"><p style="margin: 0;font-size: 14px;line-height: 21px;text-align: center"><a style="color:#0068A5;text-decoration: underline;" href="https://profiel.vvsg.be/privateEzine/?vvsgtoken=%5B4ECCB305-A668-4455-9DD6-331A647B3E7B%5D#!/EzineSubscription" target="_blank" rel="noopener">Wens je geen mails meer te krijgen?</a></p><p style="margin: 0;font-size: 14px;line-height: 21px;text-align: center"><a style="color:#0068A5;text-decoration: underline;" href="http://www.vvsg.be/overvvsg/Pages/privacy-beleid.aspx" target="_blank" rel="noopener">Privacyverklaring</a></p></div></div></div></div></div></div></div></div></div></td></tr></tbody> </table> </body></html>'

      $.ajax({
        url: ajax_object.ajax_url,
        method: 'POST',
        data: {
          action: 'ik_ajax_enroll',
          to: to,
          subject: subject,
          body: body
        },
        beforeSend: function(){
          $('#enroll_all').toggleClass('loading').text('')
        },
        success: function (response){
          if(response === '200'){
            $('#enroll_all').toggleClass('loading').css('background-color', '#3FDA79').text('Klaar!')
            $('.reg_info').html('<h2>Bedankt!</h2><br>Je registratie is doorgegeven aan ons systeem.<br><br>Je krijgt snel een mailtje met de bevestiging dat je registratie voltooid is.')
          } else {
            $('#enroll_all').toggleClass('loading').addClass('error').text(response)
          }
        },
        error: function (response){
            $('#enroll_all').toggleClass('loading').addClass('error').text(response)
        }
      })
    })
  })
}(jQuery))
