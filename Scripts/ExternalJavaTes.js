   function check(form) { /*function to check userid & password*/
                /*the following code checkes whether the entered userid and password are matching*/
                if(form.userid.value == "ip-dream" && form.pswrd.value == "g-suit-pro") {
                    window.open("HomePage.php","_self")/*opens the target page while Id & password matches*/
                }
                else {
                    alert("Error Password or Username")/*displays error message*/
                }
            }


           function check1(form) { /*function to check userid & password*/
                /*the following code checkes whether the entered userid and password are matching*/
                
                    window.open('ManagementPassword.html')/*opens the target page while Id & password matches*/
               
            }


           function check2(form) { /*function to check userid & password*/
                /*the following code checkes whether the entered userid and password are matching*/
                
                    window.open('RegistrationForm.php')/*opens the target page while Id & password matches*/
               
            }
