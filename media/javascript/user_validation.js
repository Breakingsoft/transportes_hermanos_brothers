/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

function validate_password(){
    var pass = document.getElementById('password_user_registration').valueOf() ;
    var pass_confirm = document.getElementById('password_confirm_user_registration').valueOf();
    
    alert (pass + pass_confirm);
          
}