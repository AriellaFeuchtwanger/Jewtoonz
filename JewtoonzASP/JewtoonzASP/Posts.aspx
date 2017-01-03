<%@ Page Title="Posts" Language="C#" MasterPageFile="~/JewtoonzMaster.Master" AutoEventWireup="true" CodeBehind="Posts.aspx.cs" Inherits="JewtoonzASP.Posts" %>

<asp:Content ID="Content1" ContentPlaceHolderID="placeholder" runat="server">
    <asp:DataGrid runat="server" AllowSorting="true" DataSourceID="SqlDataSource1">
    </asp:DataGrid>
    <asp:SqlDataSource ID="SqlDataSource1" runat="server" ConnectionString="<%$ ConnectionStrings:JewtoonzConnectionString %>" SelectCommand="select u.firstname, u.lastname, p.Title, p.datePosted
from post p
join [User] u
on p.userID = u.userID"></asp:SqlDataSource>
</asp:Content>
