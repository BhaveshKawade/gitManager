<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
 


<script type="text/javascript">
	function fun(){

$.ajax({
    type : 'GET',
    url : 'http://www.google.com',
    dataType: 'html',
    timeout: 10000,
    beforeSend: function(){
        $('.my-box').html('<div class="progress"><div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div></div>');
        $('.progress-bar').animate({width: "30%"}, 100);
    },
    success: function(data){  
        if(data == 'Unauthorized.'){
            location.href = 'logout';
        }else{
            $('.progress-bar').animate({width: "100%"}, 100);
            setTimeout(function(){
                $('.progress-bar').css({width: "100%"});
                setTimeout(function(){
                    $('.my-box').html(data);
                }, 100);
            }, 500);
        }
    },
    error: function(request, status, err) {
    	console.log(status);
        alert((status == "timeout") ? "Timeout" : "error: " + request + status + err);
    }
})
};
	fun();

</script>
after fetaure 1 feature 2 has been added.
hey feature3 here.
