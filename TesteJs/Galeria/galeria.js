$(document).ready(function () {
  $(".imgPeq").click(function () {
    
      $(".imgPeq").removeClass("imgSelecionado");
    
      $(this).addClass("imgSelecionado");

  
      let arq = $(this).attr("src");
      
      $("#principal").attr("src", arq);
      
      $(".imgPeq").fadeIn(1000);
      $(this).hide(100); 
  });
});
