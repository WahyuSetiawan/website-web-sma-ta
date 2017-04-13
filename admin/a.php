<body> 
 <div id="wrapper">
<div id="title">
<h1> <a href="#" title="Login admin" > </a></h1>
<h5> 
<?php date_default_timezone_set("Asia/Jakarta");
echo date('l, d  F  Y | h:i A')
;?> 
</h5>
</div>
<div id="form">
  <form id="login_admin" name="login_admin" method="post" action="">
    <p>
     
      <input type="text" name="user" class="user" placeholder="username" required="required"/>
      <label class="user_key" for="user"></label>
    </p>
    <p>
      <input type="password" name="pass" class="pass" placeholder="password"  required="required"/>
      <label class="pass_key" for="pass"></label>
    </p>

      <input type="submit" name="button" class="button" value="login" />
   
  </form>
</div>
</div>
</body>