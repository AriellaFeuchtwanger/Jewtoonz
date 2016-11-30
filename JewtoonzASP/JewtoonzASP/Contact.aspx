<%@ Page Title="" Language="C#" MasterPageFile="~/JewtoonzMaster.Master" AutoEventWireup="true" CodeBehind="Contact.aspx.cs" Inherits="JewtoonzASP.Contact" %>

<asp:Content ID="Content1" runat="server" ContentPlaceHolderID="placeholder">
    <label>Your name:</label><br />
    <input type="text" name="name" /><br />
    <label>Email:</label><br />
    <input type="text" name="email" /><br />
    <label>Subject:</label><br />
    <input type="text" name="subject" /><br />
    <label>Your message:</label><br />
    <textarea id="message" name="message" rows="7" cols="30"></textarea><br />
    <input id="submit_button" type="submit" value="Send email" />
</asp:Content>


