<script>
jQuery(document).ready(function($){
        // quand je scroll down or top
        $(window).scroll(function(){
            //si scroll  men fo9 depasse 610 (selon la demande du client) 
            if($(window).scrollTop()>=610) {
                // ajouter une class 
                $(".fusion-header").addClass('appear_bg');
            }else{
                // sinon supprimer la class
                $(".fusion-header").removeClass('appear_bg');
            }
        })
     //NB la class change la bg_color dial menu   
});
 
</script>