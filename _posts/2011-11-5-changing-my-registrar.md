---
layout: post
title: Changing my Registrar
---

Domain Registrars are where the DNS main record is stored. This record points to the Domain Nameserver that handles routing. The registrar is the goto guy for determining what nameserver a domain uses.

DNS handles A and CNAME thingies. For example, my DNS managers has an A record for *dangduc.com* pointing to *dangduc.github.com*, and a CNAME record for subdomain *www* pointing to the same. I could've easily set a CNAME for the subdomain *blog* instead of *www*:

*blog.dangduc.com*

DNS also stores something call a mail exchange record (MX) that tells mail where to route. My MX records point to Gmail's servers.

I decided to change my registrar and DNS service. Here's why...

First, my domain is up for renewal and I am unhappy with my current registar, Godaddy, for reasons that will be explained later. I decided on NearlyFreeSpeech, because of all the registrars I looked at, NFS was the only registrar that presented their services in a plain matter-of-fact way. And it appears cheap.

### Breakdown of costs between registrars and DNS

- Godaddy: .com registration $12 + included DNS service = $12 total
- NFS: registration $9 + DNS $1.22 = $10.22

Godaddy costs $1.78 more. Also, after I changed my DNS from Godaddy to NearlyFreeSpeech, requests for pages are noticeably faster. Why, cheaper **and** faster? That breaks the principal of engineering trade-off.

When a domain is registered, anyone can do a *whois* search for the name, physical address, and telephone number of the registrant. I don't know about you, but I like to keep my private information cards close to my chest. 

*Think about it this way*: Without private registration, any girl in a miniskirt from the club is just keystrokes from your phone number. Now once she has your contact information, there's no way she's giving you her own number, because she already has yours. There's nothing left for you to exchange. *Totally plausible*.

Anyway, registrants can hide behind a proxy organization using private registration. So a whois search shows the proxy organization's information instead of the true registrant's.

### Breakdown of costs with private registration

- Godaddy: .com registration $12 + free DNS + private registration $5 = $17 total
- NFS: registration $9 + DNS $1.22 + private $3.65 = $13.87 total

Now look at that! NFS has an even better deal if private is how you roll.

### Conclusion

The pricing is compelling reason to switch registrars and DNS, but there are things about my previous registrar, Godaddy, that really boils my plate and tip the pot.

Godaddy's domain management web interface is like that brother you never want to visit, because his house has so much trash all over the hallways, it takes 10 minutes to get from the front door to the living room. With Godaddy, you need to wad pass all their messy attempts to milk you of your money: "Buy two domains, get one free!" Then you need to click your way through nine tiny submenus and dropboxes, so you can be presented with their unintuitive management tools. It's a sad day when I need to change something with my domain.

NFS's management web interface is simple. Once you login, you are presented with tabs. *Beautiful* tabs containing everything you can do like setting DNS records, tearing down hosted sites, and registering new domains. Unlike that other site, you don't see company offers plastered anywhere. 

By the way, I don't get any benefits for writing this; NFS does not have an affiliate program like many popular sites \*cough\* Godaddy, Dreamhost \*cough\*.

Changing registrars is a bit more complicated for me, because I had private registration. I first had to remove this feature, exposing my true whereabouts, before I was allowed to change registrars. I had to to this according to both NFS and Godaddy. I'm not sure if this is a necessary thing when changing registrars, but it defeats the purpose of private registration.
