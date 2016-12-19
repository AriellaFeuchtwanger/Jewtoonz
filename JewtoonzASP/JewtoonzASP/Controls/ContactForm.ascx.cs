using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;
using System.IO;
using System.Net.Mail;

public partial class Controls_ContactForm : System.Web.UI.UserControl
{
    protected void Page_Load(object sender, EventArgs e)
    {

    }

    protected void SendButton_Click(object sender, EventArgs e)
    {
        if (Page.IsValid)
        {
            HttpCookie myCookie = new HttpCookie("Name");
            myCookie["Name"] = Name.Text;
            myCookie.Expires = DateTime.Now.AddDays(1d);
            Response.Cookies.Add(myCookie); 

            string fileName = Server.MapPath("~/App_Data/Contact.txt");
            string mailBody = File.ReadAllText(fileName);

            mailBody = mailBody.Replace("##Name##", Name.Text);
            mailBody = mailBody.Replace("##Email##", EmailAddress.Text);

            MailMessage myMessage = new MailMessage();
            myMessage.Subject = "Response from web site";
            myMessage.Body = mailBody;

            myMessage.From = new MailAddress("you@example.com", "Sender Name");
            myMessage.To.Add(new MailAddress("you@emaple.com", "Receiver Name"));
            myMessage.ReplyToList.Add(new MailAddress(EmailAddress.Text));

            SmtpClient mySmtpClient = new SmtpClient();
            mySmtpClient.Send(myMessage);

            Message.Visible = true;
        }
    }
}