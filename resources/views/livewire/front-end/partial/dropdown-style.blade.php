<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap');
/* *{
  margin:0;
  padding:0;
  font-family: 'Poppins', sans-serif;
}
body{
  background:rgba(128, 234, 209,1);
} */
/* .container{
  display:flex;
  align-items:center;
  justify-content:center;
  background:linear-gradient(112.72013189013455deg, rgba(186, 213, 241,1) 4.927083333333334%,rgba(42, 39, 107,1) 97.84374999999999%);
  height:100vh;
  width:100%;
  
} */
/* .action{
  position:fixed;
  top:20px;
  right:30px;
} */
.action .profile{
  
  overflow: hidden;
    cursor: pointer;
    /* width: 45px;
    height: 45px; */
    /* border-radius: 50%; */
    overflow: hidden;
    /* border: 2px solid #fff; */
  
    margin-right: 22px;
}
.action .profile img{
  /* position:absolute;
  top:0; left:0;
  widht:100%; height:100%;
  object-fit:cover;
  border-radius:50%; */
  width: 100%; /* Make the image fill the circular container */
    height: auto; /* Maintain the aspect ratio */
    display: block; 
}
.action .menu{
  position:absolute;
  /* top: calc(100% + 10px);
  right:-10px; */
  padding:10px 20px;
  /* background: #fff;
   */
   background-image: -webkit-linear-gradient(7deg, rgb(236, 19, 121) 0%, rgb(108, 0, 146) 100%);
  width:200px;
  box-sizing: 0 5px 25px rgba(0,0,0,.1);
  border-radius:15px;
  transition:.5s;
  visibility:hidden;
  opacity:0;
}
.action .menu.active{
  top: 63px;
  visibility:visible;
  opacity:1;
}
.action .menu::before{
  content:'';
  position:absolute;
  top:-6px;
  right:132px;
  /* right: 20px; */
  width:20px;
  height:20px;
  /* background: #fff; */

   background-image:  -webkit-linear-gradient(7deg, rgb(174, 0, 141) 0%, rgb(174, 0, 141) 100%);
   /* background-image:  -webkit-linear-gradient(7deg, rgb(174, 0, 141) 0%, rgb(109, 3, 146) 100%); */
  transform: rotate(45deg);
}
.action .menu h3{
  width:100%;
  text-align:center;
  font-size: 18px;
  padding:20px 0;
  font-weight: 500;
  font-size: 18px;
  color:#fff;
  line-height: 1.2em;
}
.action .menu h3 span{
  font-size: 14px;
  color:#cecece;
  font-weight: 400;
}
.action .menu ul li{
  list-style:none;
  padding:10px 0;
  border-top:1px solid rgba(0,0,0,0.05);
  display:flex;
  align-items:center;
  
}
.action .menu ul li i{
  font-size: 26px;
  width:32px;
  margin-right: 10px;
  opacity:.6;
  transition:.5s;
  color: #fff
}
.action .menu ul li:hover i{
  opacity:1;
}
.action .menu ul li a{
  display:inline-block;
  text-decoration:none;
  /* color:#ffff; */
  font-weight: 500;
  transition:.5s;
}
.action .menu ul li a button{
  background-image: -webkit-linear-gradient(86deg, rgb(236, 3, 139) 0%, rgb(251, 100, 104) 44%, rgb(251, 185, 54) 100%);
    border-radius: 30px;
    padding: 9px;
    color: #ffff;
    width: 160px;
}
.action .menu ul li a button:hover{
  color:#f90019;
}
.action .menu ul li:hover a{
  color:#f90019;
  text-decoration:#ffff;
}
@media (max-width: 768px) {
    .action .menu {
        top: 45px;
        right: 50px;
        width: 191px;
    
    }
    .action .menu::before{
      right: 40px;
    }
    .action .menu.active {
    top: 96px;
    visibility: visible;
    opacity: 1;
}
}
</style>