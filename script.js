$(document).ready(function(){
  $(".color").on("change",function(){
    let hex = $(this).val();
    this.style.backgroundColor = hex ;
    
  });
  $("#height").on("change",function(){
    let height = $(this).val();
    if(height>3000){
      this.value = 3000;
    }
    else if(height<50){
      this.value = 50;
    }
  });
  $("#width").on("change",function(){
    let width = $(this).val();
    if(width>3000){
      this.value = 3000;
    }
    else if(width<50){
      this.value = 50;
    }
  });
  $("#generate-btn").click(function(){
    
    if($("#height").val()!="" && $("#width").val()!="" && $("#color").val()!="" && $("#format").val()!=""){
      const color = $("#color").val();
      const red = parseInt(color[1]+color[2],16);
      const green = parseInt(color[3]+color[4],16);
      const blue = parseInt(color[5]+color[6],16);
      $.ajax({
        url : "generate.php",
        type : "post",
        data : {
          width : $("#width").val(),
          height : $("#height").val(),
          red : red,
          green : green,
          blue : blue,
          format : $("#format").val()
        },
        beforeSend:function(){
          $(this).text("Generating...");
          this.disabled = 'disabled';
        },
        success: function(res){
          $(this).text("Generate");
          $(this).removeAttr("disabled");
          const anchor = document.createElement("a");
          anchor.href = res;
          anchor.target = "_blank";
          anchor.click();
        }
      });
    }
  });
});