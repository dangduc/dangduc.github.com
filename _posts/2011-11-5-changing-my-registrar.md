---
layout: post
title: Changing my Registrar
published: false
---

I decided to change my registrar and DNS service. Here's why...

## Background

First, some *domain* terms. Domain Registrars are where the DNS main record is stored. This record points to the Domain Nameserver that handles routing. The registrar is the goto guy for determining what nameserver a domain uses.

DNS handles A and CNAME thingies. For example, my DNS managers has an A record for *dangduc.com* pointing to *dangduc.github.com*, and a CNAME record for subdomain *www* pointing to the same. I could've easily set a CNAME for the subdomain *blog* instead of *www*.


<table>
  <caption>DangDuc Domain Name Mapping</caption>
  <tr>
    <th>Record Type</th>
    <th>name</th>
    <th>resolution</th>
  </tr>
  <tr>
    <td>A Record</td>
    <td>dangduc.com</td>
    <td>dangduc.github.com</td>
  </tr>
  <tr>
    <td>CNAME</td>
    <td>www.dangduc.com</td>
    <td>dangduc.github.com</td>
  </tr>  
</table>

DNS also stores something call a mail exchange record (MX) that tells mail where to route. My MX records point to Gmail's servers.

## Godaddy versus NearlyFreeSpeech

My domain is up for renewal and I am unhappy with my current registar, Godaddy, for reasons that will be explained later. I decided on NearlyFreeSpeech, because of all the registrars I looked at, NFS was the only registrar that presented their services in a plain matter-of-fact way. And it appears cheap.

<table>
  <caption>Breakdown of Costs Between Registrars with DNS</caption>
  <tr>
    <th>Registrar</th>
    <th>Registration</th>
    <th>DNS</th>
    <th>Total Cost</th>
  </tr>
  <tr>
    <td>Godaddy</td>
    <td>12</td>
    <td>included</td>
    <td>12</td>
  </tr>
  <tr>
    <td>NFS</td>
    <td>9</td>
    <td>1.22</td>
    <td>10.22</td>
  </tr>  
</table>

Godaddy costs $1.78 more. Also, after I changed my DNS from Godaddy to NearlyFreeSpeech, requests for pages are noticeably faster. Why, cheaper **and** faster? That breaks the principal of engineering trade-off.

When a domain is registered, anyone can do a *whois* search for the name, physical address, and telephone number of the registrant. I don't know about you, but I like to keep my private information cards close to my chest. 

**Think about it this way**: Without private registration, any girl in a miniskirt from the club is just keystrokes from your phone number. Now once she has your contact information, there's no way she's giving you her own number, because she already has yours. There's nothing left for you to exchange. *Totally plausible*.**\***

Anyway, registrants can hide behind a proxy organization using private registration. So a *whois* search shows the proxy's information instead of the true registrant's.

<table>
  <caption>Costs with Private Registration</caption>
  <tr>
    <th>Registrar</th>
    <th>Registration</th>
    <th>DNS</th>
    <th>Private Reg</th>
    <th>Total Cost</th>
  </tr>
  <tr>
    <td>Godaddy</td>
    <td>12</td>
    <td>included</td>
    <td>5</td>
    <td>17</td>
  </tr>
  <tr>
    <td>NFS</td>
    <td>9</td>
    <td>1.22</td>
    <td>3.65</td>
    <td>13.87</td>
  </tr>  
</table>


Now look at that! NFS has an even better deal if private is how you roll.

## Conclusion

The pricing is reason enough to switch registrars and DNS, but there are things about my previous registrar, Godaddy, that really boils my plate and tips the pot.

Godaddy's domain management web interface is like that brother you never want to visit, because his house has so much trash all over the hallways, it takes 10 minutes to get from the front door to the living room. With Godaddy, you need to wad pass all their messy attempts to milk you of your money: "Buy two domains, get one free!" Then you need to click your way through nine tiny submenus and dropboxes, so you can be presented with their unintuitive management tools. It's a sad day when I need to change something on my domain.

NFS's management web interface is simple. Once you login, you are presented with tabs. *Beautiful* tabs containing everything you can do like setting DNS records, tearing down hosted sites, and registering new domains. Unlike that other site, you don't see company offers plastered anywhere. 

## Disclaimer

By the way, I don't get any benefits from NFS or anyone else for writing this; NFS does not have an affiliate program like many popular sites \*cough\* Godaddy, Dreamhost \*cough\*.

## Caveat

Changing registrars is a bit more complicated for me, because I had private registration. I first needed to remove this feature, exposing my true whereabouts, before I was allowed to move registrars. I had to according to both NFS and Godaddy. I'm not sure if this is a necessary thing when changing registrars, but it defeats the purpose of private registration.

**\***the trick here is to give her a false domain name when you introduce yourself.
