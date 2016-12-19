using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;

namespace JewtoonzASP
{
    public partial class JewtoonzMaster : System.Web.UI.MasterPage
    {
        protected void Page_Load(object sender, EventArgs e)
        {
            if(Response.Cookies["Name"] != null)
            {
                NameBox.Text = Response.Cookies["Name"]["Name"];
            }
        }
    }
}