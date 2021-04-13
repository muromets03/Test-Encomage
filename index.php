<!DOCTYPE HTML>
<html>
<style>
body,div,dl,dt,dd,ul,ol,li,h1,h2,h3,h4,h5,h6,pre,
form,fieldset,input,textarea,p,blockquote,th,td {
    padding: 0;
    margin: 0;
}
table {
    border-collapse: collapse;
    border-spacing: 0;
}
fieldset,img {
    border: 0;
}
address,caption,cite,code,dfn,em,strong,th,var {
    font-weight: normal;
    font-style: normal;
}
ol,ul {
    list-style: none;
}
caption,th {
    text-align: center;
}
h1,h2,h3,h4,h5,h6 {
    font-weight: normal;
    font-size: 100%;
}
q:before,q:after {
    content:'';
}
abbr,acronym { border: 0;
}?
</style>
<style>
#row li {
    list-style:none;
}
table {
    width:900px;
    text-align:center;
    margin:auto;
    outline: 1px solid black;
    border-collapse: collapse;
}

TD, TH {
    padding: 3px; 
    border: 0px solid black; 
    
   }
#start {
    background: #BBD1DD; 
   }
   
#shapka{
border-bottom: 2px solid #B4B4B4;
border-radius: 5%;
display: flex;
margin: auto;
width: 890px;
justify-content: space-between;
height:30px;
align-items: center;
    }
    
    
#formlogin{
    border: 1px solid black;
    width: 900px;
    height: 200px;
    margin: auto;
}
#formloginall{
    width: 900px;
    height: ;
    margin: auto;
    display:none;
}
#formloginaction{
display: flex;
justify-content: space-between;
align-items: center;
padding: 0px 0px 5px 0px;
}
#formlogin h5{
    background: #748A96;
color: white;
font-size: 110%;
font-weight: bold;
padding: 0px 0px 0px 20px;
}
#formlogin ul li{
    display: flex;
    padding: 10px 0px 5px 12px;
}
#formlogin p{
    width: 200px;
} 
#formlogin input{
    width: 300px;
}
#adduser{
    border-radius: 10%;
    background-color: #748A96;
    color: white;
    font-size: 90%;
    font-weight: bold;
    display: flex;
    align-items: center;
}
#adduser p{
width: 17px;
border: 1px solid white;
border-radius: 25%;
margin: 0px 5px 0px 0px;
}
#search_bar{
  margin: auto;
width: 900px;
display:flex;
justify-content: space-between;
padding: 10px 0px 0px 0px;  
}
#search input{
    height: 20px;
padding: 0px 0px 0px 0px;
margin: 0px -3px 0px 0px;
}
#element_filtr_page{
width: 200px;
display: flex;

}
#element_filtr_page p{
    padding:0px 5px 0px 5px;
}
#page{
    width: 20px;
text-align: center;
}
svg{
    padding: 0px 5px 0px 5px;
}
.arrow-left-2,
.arrow-right-2
 {
    margin:auto;
 width: 20px;
height: 18px;
}
.arrow-left-2 path,
.arrow-right-2 path
 {
    fill: #BBD1DD ;
    stroke-width: .6;
    stroke: #337AB7;    
    transition: fill 0.5s ease-out;
    cursor: pointer;
}
.arrow-left-2 {
    transform: rotate(180deg);
}

.arrow-left-2 path:hover,
.arrow-right-2 path:hover
 {
    fill: #748A96;
} 
select{
    margin: 0px 0px 0px 5px;
}
#edit{
    display:flex;
    justify-content:space-around;
}
.edit{
    text-decoration: underline;
    color: #FE7309;
}  

    
.active{
    display:none;
}
.row_active{
    background-color: gray;
}
#row:hover{
    background-color: gray;
}

</style>
<head>
	<meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="admin" />
	<title>tABLE</title>
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/js-cookie@2/src/js.cookie.min.js"></script>
 <script>
 
  function submitForm() {
            var fd = new FormData($('#informationinfo')[0]);
            var d= new Date().toISOString().slice(0, 10);
            $('table').append('<tr id="row"><th>'+(+$("[id|='row']")[$("[id|='row']").length-1].firstChild.innerText+1)+'</th><th>'+$("#first").val()+'</th><th>'+$("#last").val()+'</th><th>'+$("#email").val()+'</th><th>'+d+'</th><th>'+d+'</th></tr>');
            
            $.ajax({
              url: "adduser.php",
              type: "POST",
              
              data: fd,
              processData: false,  // tell jQuery not to process the data
              contentType: false   // tell jQuery not to set contentType
            }).done(function(data) {
                console.log()
                $('table').empty();
                $('table').append('<tr id="start"><th>ID</th><th>First Name</th><th>Last Name</th><th>Mail</th><th>Date Created</th><th>Last Modified</th</tr>'+data);
            });
            return false;
            
             
        }
       
 </script>
 <script>
 
    $(document).ready(function(){
      
     $("#adduser").on("click",function(){
        $("#formloginall").toggle("slow");
         //$("#table").toggle($("#formloginall").css("display","block"));
        //$("#table").css("display","");
        //$("#formloginall").css("display","block");
     })
     $("#backbutton").on("click",function(){
        $("#table").css("display","block");
        $("#formloginall").toggle("slow");
        
     })  
      
     $("#test").on("click",function(){
      
      
     updatedate(e);
     


      
       var q=$($("#start th")[1]);
       console.log(q);
       
        q.append('<input value='+q.html()+'>');
        
     
     })
     
     
 function edit(){
    $(".edit").on("click",function(e){
         var ob=$(this).parents("tr").children();
         $(this).parents("tr").addClass("row_active");
          if(!$("p").hasClass("active")){
          //ob.find("p").addClass("active");
          ob.find("p").addClass(function(index){
            if(index>0){
                 return "active";
            }
          });
          
        var obdata_arr=[];
        for($i=1;$i<=5;$i++){
           
            var ob=$(this).parents("tr").children();
            var obdata=$(ob.find("p")[$i]).text();
           
             
             
            $(ob[$i]).append('<input value='+obdata+'>');
           
           
           obdata_arr[$i]=obdata;
            
        }
      
        
        }
        else{
       
        ob.find("p").removeClass("active");
        $(".row_active").removeClass();
        $("table input").remove(); 
        return;   
        }
        
    });
      };
      
  function save(){     
        $(".save").on("click",function(e){
        if($("p").hasClass("active")){
                var obdata_arr=[];
                obdata_arr[0]=$($(this).parents("tr").children().find("p")[0]).text();
                
                for($i=0;$i<=5;$i++){
                  
                   obdata_arr[$i+1]=$($($(this).parents("tr").children().find("input"))[$i]).val();
                
                   
                  $($($(this).parents("tr").children().find("p"))[$i]).text(obdata_arr[$i]);
                  
                }
                
                $($(this).parents("tr").children().find("p")).removeClass("active");
                
               
                   $("table input").remove();
      
        }
        
        updatedata(obdata_arr);
        
       });
     
     
     };
       $("#search_input").on("input",function(e){
     
        search($(this).val());
    });
    
 
function updatedata(as){
 
 //console.log(as);
 
var xhr = new XMLHttpRequest();
 
 
 
 var body ='id=' +encodeURIComponent(as[0])+'&first_name=' +encodeURIComponent(as[1])+'&last_name=' +encodeURIComponent(as[2])+'&email=' +encodeURIComponent(as[3])+'&create_data=' +encodeURIComponent(as[4])+'&update_data=' +encodeURIComponent(as[5]);
 //отправляем данные 

xhr.open("POST", "reduser.php", true); // async=true
xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

xhr.send(body);

xhr.onreadystatechange = function() {
  if (xhr.readyState != 4) {
    
    return
  }
  if (xhr.status === 200) {
    
    var qwe=xhr.responseText;//получаем данные
   
     console.log(qwe);
   }
 }
 
}





function search(as){
 
 //console.log(as);
 
var xhr = new XMLHttpRequest();
 
 
 
 var body ='search=' +encodeURIComponent(as);
 //отправляем данные 

xhr.open("POST", "search.php", true); // async=true
xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

xhr.send(body);

xhr.onreadystatechange = function() {
  if (xhr.readyState != 4) {
    
    return
  }
  if (xhr.status === 200) {
    
    var qwe=xhr.responseText;//получаем данные
    //console.log(JSON.parse(xhr.responseText));
      $("[id=row]").remove();
    $("table").append(qwe);
  edit();
  save();
  
   }
 }
 
}


   
   $("select").change(function(e){
    
    
  
    sorting($(e.target).val());
   
   
   })
   
   
 function sorting(sort){
 

 
var xhr = new XMLHttpRequest();
 
 
 
 var body ='view=' +encodeURIComponent(+sort);


console.log(sort);
xhr.open("POST", "sorting.php", true); // 
xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

xhr.send(body);

xhr.onreadystatechange = function() {
  if (xhr.readyState != 4) {
    
    return
  }
  if (xhr.status === 200) {
    
    var qwe=xhr.responseText;
      $("[id=row]").remove();
    $("table").append(qwe);
   
  
   }
 }
 
}  
  
$("svg").on("click",function(e){
        
        $select_val=$("select").val()
        $page_all_val=$("#page_all").val();
        $page_value=$("#page").val();
        $add_value=$(this).attr("id");
        $click=+$page_value+(+$add_value);
        if($click<=((+$page_all_val)/(+$select_val))&&$click>=1){
           $("#page").val($click);
            sorting_page($page_all_val,$click,$select_val);
        }
   
    });
    
function sorting_page(raz,dva,tri){
 

 
var xhr = new XMLHttpRequest();
 
 
 
 var body ='page1=' +encodeURIComponent(raz)+'&page2='+encodeURIComponent(dva)+'&page3='+encodeURIComponent(tri);
 

xhr.open("POST", "page.php", true); // async=true
xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

xhr.send(body);

xhr.onreadystatechange = function() {
  if (xhr.readyState != 4) {
    
    return
  }
  if (xhr.status === 200) {
    
    var qwe=xhr.responseText;//получаем данные
    //console.log(JSON.parse(xhr.responseText));
     $("[id=row]").remove();
    $("table").append(qwe);
  edit();
  save();
  
   }
 }
 
}  
edit();
save();



});
    
 </script>
    
</head>

<body>





<div id="all">
<div id="formloginall">
<div id="formloginaction">
<h1>Add User</h1>
<div>
<button id="backbutton">Back</button>

</div>
</div>
<div id="formlogin">
<h5>User information</h5>
<ul>
<form method="post" id="informationinfo" name="informationinfo" onsubmit="return submitForm();">
<ul>
<li><p>First Name</p><input id="first" class="information" type="text" name="text[]" /></li>
<li><p>Last Name</p><input id="last" class="information" type="text" name="text[]" /></li>
<li><p>Email</p><input id="email" class="information" type="text" name="text[]" /></li>
<button type="submit">Save</button>
</form>
</ul>
</div>
</div>
<div id="table">
<div id="shapka">
<h5>User List</h5>
<button id="adduser"><p>+</p>Add User</button>
</div>
<div id="search_bar">
<div id="element_filtr_page"> 
<p>Page</p>

<?php
$link=mysqli_connect("localhost", "root", "root", "test_encomage_db");

$count_arr=mysqli_query($link,"SELECT COUNT(*) FROM `users` ");

$count=mysqli_fetch_array($count_arr);

$count=+$count[0]+1;

echo ('<input id="page_all" type="hidden" value='.$count.'>');

?>

<svg id="-1" class="arrow-left-2" viewBox="0 0 9 14">
    <path class="svg-arrow" d="M6.660,8.922 L6.660,8.922 L2.350,13.408 L0.503,11.486 L4.813,7.000 L0.503,2.515 L2.350,0.592 L8.507,7.000 L6.660,8.922 Z" />
</svg>
<input id="page" value="1" />
<svg id="1" class="arrow-right-2" viewBox="0 0 9 14">
    <path class="svg-arrow" d="M6.660,8.922 L6.660,8.922 L2.350,13.408 L0.503,11.486 L4.813,7.000 L0.503,2.515 L2.350,0.592 L8.507,7.000 L6.660,8.922 Z" />
</svg>


<p>View</p>





<select>
  <option >3</option>
  <option >6</option>
  <option>9</option>
</select>
</div>
<div id="search">
<input id="search_input" placeholder="First Name" /><button>Search</button></div>
</div>

<table>

<tr id="start">
    <th>ID</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Mail</th>
    <th>Date Created</th>
    <th>Last Modified</th>
    <th>Action</th>
</tr>
<?php

require 'bd.php';

?>

</table>


</div>
</div>

</body>
</html>




