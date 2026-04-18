---
title: Contact
menu: Contact
form:
    name: contact
    fields:
        name:
            type: text
            label: Name
            placeholder: 'Your name'
            validate:
                required: true
        email:
            type: email
            label: Email
            placeholder: your@email.com
            validate:
                required: true
        message:
            type: textarea
            label: Message
            placeholder: 'Your message'
            rows: 5
            validate:
                required: true
    buttons:
        submit:
            type: submit
            value: 'Send Message'
    process:
        save:
            fileprefix: contact-
            dateformat: Ymd-His
            extension: txt
            body: "{% include 'forms/data.twig' %}"
        flash: 'Message sent successfully!'
process:
    markdown: true
    twig: true
twig_first: false
---

# GET IN TOUCH

Drop me a line using the form below.  
I'd love to hear from you.
<div class="fax-modem-wrapper">
<img src="{{ url('theme://assets/fax-modem.svg') }}" alt="Retro 14400 fax modem">
</div>
<div class="contact-form-wrapper">
<form method="post" action="{{ page.url }}" class="synthwave-form">
  <div class="form-group">
    <label class="form-label">Name</label>
    <input type="text" name="name" class="form-input" placeholder="Your name" required>
  </div>
  <div class="form-group">
    <label class="form-label">Email</label>
    <input type="email" name="email" class="form-input" placeholder="your@email.com" required>
  </div>
  <div class="form-group">
    <label class="form-label">Message</label>
    <textarea name="message" class="form-input" rows="5" placeholder="Your message" required></textarea>
  </div>
  <div class="form-buttons">
    <button type="submit" class="btn">Send Message</button>
  </div>
</form>
</div>
