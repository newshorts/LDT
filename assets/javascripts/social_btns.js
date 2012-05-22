

    function goFB() {
        var astr = "'"
          var left = (screen.width/2)-325;
          var top = (screen.height/2)-275;                                                                         
          var _fb = window.open('http://www.facebook.com/sharer.php?s=100&p[url]=http://www.letsdothis.com&p[title]=Let'+astr+'s+Do+This&p[summary]=Check+out+the+latest+stunts+at+letsdothis.com' ,'_fb','width=660,height=550,top=' + top + ',left=' + left)
          _fb.focus();
        }

        function goTW() {
          var left = (screen.width/2)-265;
          var top = (screen.height/2)-225;                                                             
          var _tw = window.open('https://twitter.com/intent/tweet?original_referer=&source=&text=Check%20out%20the%20latest%20stunts%20at%20http%3A%2F%2Fwww.letsdothis.com%20%23letsdothis' ,'_fb','width=550,height=450,top=' + top + ',left=' + left)
          _tw.focus();
        }

        function goPIN() {
          var left = (screen.width/2)-265;
          var top = (screen.height/2)-225;     
          var _pin = window.open('http://pinterest.com/pin/create/button/?url=http%3A%2F%2Fwww.letsdothis.com&media=http%3A%2F%2Fletsdothis.com%2Fassets%2Fimages%2Fgallery%2F1-okgo.jpg&description=Check%20out%20the%20latest%20stunts%20at%20letsdothis.com%20%23letsdothis')
          _pin.focus();
        }
