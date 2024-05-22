'use strict';
var BootstrapNotifyDemo = function () {
    var demo = function () {
        $('#bootstrap-notify-gen-btn').click(function() {
            var content = {};
            content.message = 'New order has been placed';
            if ($('#bootstrap-notify-title').prop('checked')) {
                content.title = 'Notification Title';
                content.target = '_blank';
            }
            if ($('#bootstrap-notify-icon').val() != '') {
                content.icon = 'icon ' + $('#bootstrap-notify-icon').val();
            }
            if ($('#bootstrap-notify-url').prop('checked')) {
                content.url = 'http://pixelstrap.com';
                content.target = '_blank';
            }
            
            var notify = $.notify({
                title:'Email: Erica Fisher',
                message:'Investment, stakeholders micro-finance equity health Bloomberg; global citizens climate change. Solve positive social change sanitation, opportunity insurmountable challenges...'
             },
             {
                type:'danger',
                allow_dismiss:false,
                newest_on_top:false ,
                mouse_over:false,
                showProgressbar:false,
                spacing:10,
                timer:3000,
                placement:{
                  from:'bottom',
                  align:'right'
                },
                offset:{
                  x:30,
                  y:30
                },
                delay:1000 ,
                z_index:10000,
                animate:{
                  enter:'slideOutUp',
                  exit:'animated bounce'
              }
            });
            if ($('#bootstrap-notify-progress').prop('checked')) {
                setTimeout(function() {
                    notify.update('message', '<strong>Saving</strong> Page Data.');
                    notify.update('type', 'primary');
                    notify.update('progress', 20);
                }, 1000);
                setTimeout(function() {
                    notify.update('message', '<strong>Saving</strong> User Data.');
                    notify.update('type', 'warning');
                    notify.update('progress', 40);
                }, 2000);
                setTimeout(function() {
                    notify.update('message', '<strong>Saving</strong> Profile Data.');
                    notify.update('type', 'danger');
                    notify.update('progress', 65);
                }, 3000);
                setTimeout(function() {
                    notify.update('message', '<strong>Checking</strong> for errors.');
                    notify.update('type', 'success');
                    notify.update('progress', 100);
                }, 4000);
            }
            var notify_content1 = "&lt;script&gt;<br>   $.notify({<br>      title:'Email: Erica Fisher',<br>      message:'Investment, stakeholders micro-finance equity health Bloomberg; global citizens climate change. Solve positive social change sanitation, opportunity insurmountable challenges...'<br>   },<br>   {<br>      type:'" + $('#bootstrap-notify-state').val() +"',<br>      allow_dismiss:"+ $('#bootstrap-notify-dismiss').prop('checked') + ",<br>      newest_on_top:" + $('#bootstrap-notify-top').prop('checked') + " ,<br>      mouse_over:" + $('#bootstrap-notify-pause').prop('checked') + ",<br>      showProgressbar:" + $('#bootstrap-notify-progress').prop('checked') + ",<br>      spacing:" + $('#bootstrap-notify-spacing').val() + ",<br>      timer:" + $('#bootstrap-notify-timer').val() + ",<br>      placement:{<br>        from:'" + $('#bootstrap-notify-placement-from').val() + "',<br>        align:'" + $('#bootstrap-notify-placement-align').val() + "'<br>      },<br>      offset:{<br>        x:" + $('#bootstrap-notify-offset-x').val() + ",<br>        y:" + $('#bootstrap-notify-offset-y').val() + "<br>      },<br>      delay:" + $('#bootstrap-notify-delay').val() +" ,<br>      z_index:" + $('#bootstrap-notify-z-index').val() + ",<br>      animate:{<br>        enter:'animated "+ $('#bootstrap-notify-enter').val()+ "',<br>        exit:'animated " + $('#bootstrap-notify-exit').val()+ "'<br>    }<br>  });<br> &lt;/script&gt;";
            $("#notify-code-show").html(notify_content1);
        });
    }
    return {
        init: function() {
            demo();
        }
    };
}();
(function($) {
    "use strict";
    BootstrapNotifyDemo.init();
    var notify_content1 = "&lt;script&gt;<br>   $.notify({<br>      title:'Email: Erica Fisher',<br>      message:'Investment, stakeholders micro-finance equity health Bloomberg; global citizens climate change. Solve positive social change sanitation, opportunity insurmountable challenges...'<br>   },<br>   {<br>      type:'" + $('#bootstrap-notify-state').val() +"',<br>      allow_dismiss:"+ $('#bootstrap-notify-dismiss').prop('checked') + ",<br>      newest_on_top:" + $('#bootstrap-notify-top').prop('checked') + " ,<br>      mouse_over:" + $('#bootstrap-notify-pause').prop('checked') + ",<br>      showProgressbar:" + $('#bootstrap-notify-progress').prop('checked') + ",<br>      spacing:" + $('#bootstrap-notify-spacing').val() + ",<br>      timer:" + $('#bootstrap-notify-timer').val() + ",<br>      placement:{<br>        from:'" + $('#bootstrap-notify-placement-from').val() + "',<br>        align:'" + $('#bootstrap-notify-placement-align').val() + "'<br>      },<br>      offset:{<br>        x:" + $('#bootstrap-notify-offset-x').val() + ",<br>        y:" + $('#bootstrap-notify-offset-y').val() + "<br>      },<br>      delay:" + $('#bootstrap-notify-delay').val() +" ,<br>      z_index:" + $('#bootstrap-notify-z-index').val() + ",<br>      animate:{<br>        enter:'animated "+ $('#bootstrap-notify-enter').val()+ "',<br>        exit:'animated " + $('#bootstrap-notify-exit').val()+ "'<br>    }<br>  });<br> &lt;/script&gt;";
    $("#notify-code-show").html(notify_content1);
})(jQuery);