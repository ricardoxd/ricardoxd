=pod
Author:   TR31N0RD
Name:     Message.pl
Verion:   0.1
E-Mail:  tr31n0rd@hotmail.com
Tw:  @TR31N0RD

#NUMEROCELULAR# = Numero de celular al cual enviar los mensajes
#USUARIO#       = Numero registrado por heywire
#PASSWORD#      = Contraseña de accesso

=cut

#!/usr/bin/perl  
#Modulos
use LWP::UserAgent;
use HTTP::Request;

if ($#ARGV>-1)
{
 foreach (@ARGV) 
  {
  $Mensaje.=$_." ";
  }
  
  Logo();

 #Cookie
 $Cookie="";
 $SetCont=0;
 $SetCookie=0;
 $pagina= "https://app.heywire.com/login.aspx/AttemptLogin";
 $query = "{\"PhoneNumber\":\"14072898919\",\"Password\":\"12345678910a\",\"rememberMe\":true}";
 post($pagina);
 print "[-] Get Cookie Session...\n";
 
 $SetCont=1;
 $SetCookie=1;
 $pagina="https://app.heywire.com/Login.aspx?ReturnUrl=%2fMain.aspx";
 $query="__EVENTTARGET=__Page&__EVENTARGUMENT=Redirect&ctl00_TheScriptManager_HiddenField=%3B%3BAjaxControlToolkit%2C+Version%3D3.5.40412.0%2C+Culture%3Dneutral%2C+PublicKeyToken%3D28f01b0e84b6d53e%3Aen-US%3A1547e793-5b7e-48fe-8490-03a375b13a33%3Ade1feab2%3Af9cec9bc%3A35576c48%3Aa67c2700%3Af2c8e708%3A8613aea7%3A3202a5a2%3Aab09e3fe%3A87104b7c%3Abe6fb298&__VIEWSTATE=%2FwEPDwUKMTA2NzE3ODE3NA9kFgJmD2QWAgIDD2QWAgIDD2QWAmYPZBYCAgMPZBYCAgcPDxYCHgRUZXh0ZWRkZDOqJQ0AhNLK%2FmY2fMjLUk5qIEWC&__EVENTVALIDATION=%2FwEWCgKHg%2FLpAgLv%2FOz2CgKi5ZbNAwKs1v2LDAKqvdFtAq3V6KIHArXt38QMAu%2BQ4N0KArma5KwHAuT1tr4EyOX1Mxr32eIOekxDriV3iALpkq8%3D&ctl00%24MainContentPlaceHolder%24NumberTB=%2B#USUARIO#&ctl00%24MainContentPlaceHolder%24NumberTextBoxWatermarkExtender_ClientState=&ctl00%24MainContentPlaceHolder%24PasswordTB=#PASSWORD#&ctl00%24MainContentPlaceHolder%24PasswordTextBoxWatermarkExtender_ClientState=&ctl00%24MainContentPlaceHolder%24forgotPasswordMobileNumber=&ctl00%24MainContentPlaceHolder%24TextBoxWatermarkExtender1_ClientState=&
ctl00%24MainContentPlaceHolder%24timeZoneOffset=";
 post($pagina);
 print "[-] Get Cookie .ASPXAUTH...\n";
 
 $SetCont=0;
 $pagina="https://app.heywire.com/Main.aspx/SendSMS";
 $query="{\"from\":\"14072898919\",\"to\":\"+584128505239\",\"text\":\"".$Mensaje."\",\"loopBack\":false}";
 post($pagina);
 print "[OK] Message Send\n";
}
else
{
 Logo();
 print "Usage: perl $0 Message To Send\n";
}

sub post
{
 my $ua = LWP::UserAgent->new;
 $ua->agent("Mozilla/4.0 (compatible; MSIE 5.0; Windows 98; DigExt)");
 $req = HTTP::Request->new(POST => $_[0]);
 
 #Add Cookie
 if($SetCookie==1)
 {
  $req->header('Cookie' => $Cookie);
 }
 
 #Content Type
 if($SetCont==1)
 {
  $req->content_type('application/x-www-form-urlencoded');
 }
 else
 {
  $req->content_type('application/json; charset=utf-8');
 }
 $req->content($query);
 my $response = $ua->request($req);
 $Cookie.=$response->header('Set-Cookie')."; ";
} 

#Print Logo
sub Logo()
{
 print "\n\n";
 print" ######  ##     ##    ##          ###    ########   ######  \n";
 print"##    ## ###   ###    ##         ## ##   ##     ## ##    ## \n";
 print"##       #### ####    ##        ##   ##  ##     ## ##       \n";
 print"##       ## ### ##    ##       ##     ## ########   ######  \n";
 print"##       ##     ##    ##       ######### ##     ##       ## \n";
 print"##    ## ##     ##    ##       ##     ## ##     ## ##    ## \n";
 print" ######  ##     ##    ######## ##     ## ########   ######  \n";
 print "\n\n";
}
