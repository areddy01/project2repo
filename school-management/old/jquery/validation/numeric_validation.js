$(document).ready(function() {   
  $('.errmark').hide();
  $('.submit').click(function(event){
    var data=$('.infobox').val();
    var len=data.length;
    var c;
    for(var i=0;i<len;i++)
    {
      c=data.charAt(i).charCodeAt(0);
      if(c <48 || c >57)
      {
        $('.errmark').show();
        event.preventDefault();
        break;
      }
      else
      {
        $('.errmark').hide();
      }
    }
  });
});