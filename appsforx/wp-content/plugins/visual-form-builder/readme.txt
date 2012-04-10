=== Visual Form Builder ===
Contributors: mmuro
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=G87A9UN9CLPH4&lc=US&item_name=Visual%20Form%20Builder&currency_code=USD&bn=PP%2dDonationsBF%3abtn_donate_SM%2egif%3aNonHosted
Tags: form, forms, contact form, form to email, email form, email, input, validation, jquery, shortcode
Requires at least: 3.1
Tested up to: 3.3.1
Stable tag: 2.0

Dynamically build forms using a simple interface. Forms include jQuery validation, a basic logic-based verification system, and entry tracking.

== Description ==

*Visual Form Builder* is a plugin that allows you to build and manage all kinds of forms for your website in a single place.  Building a fully functional form takes only a few minutes and you don't have to write one bit of PHP, CSS, or HTML!

= Features =

* Add fields with one click
* Drag-and-drop reordering
* Simple, yet effective, logic-based anti-SPAM system
* Automatically stores form entries in your WordPress database
* Manage form entries in the WordPress dashboard
* Export entries to a CSV file
* Send form submissions to multiple emails
* jQuery Form Validation
* Customized Confirmation Messages
* Redirect to a WordPress Page or a URL
* Confirmation Email Receipt to User
* Standard Fields
* Required Fields
* Shortcode works on any Post or Page
* Embed Multiple Forms on a Post/Page
* One-click form duplication. Copy a form you've already built to save time
* Use your own CSS (if you want)

= Field Types =

* Fieldset
* Section (group fields within a fieldset)
* Text input (single line)
* Textarea (multiple lines)
* Checkbox
* Radio (multiple choice)
* Select dropdown
* Address (street, city, state, zip, country)
* Date (uses jQuery UI Date Picker)
* Email
* URL
* Currency
* Number
* Time (12 or 24 hour format)
* Phone (US and International formats)
* HTML
* File Upload
* Instructions (plain or HTML-formatted text)

= Entries =

* Manage submitted entries in WordPress dashboard
* Bulk Export to CSV
* Bulk Delete
* Advanced Filtering
* Collect submitted data as well as date submitted and IP Address

= Customized Confirmation Messages =

* Control what is displayed after a user submits a form
* Display HTML-formatted text
* Redirect to a WordPress Page
* Redirect to a custom URL

= Notification Emails =

* Send a customized email to the user after a user submits a form
* Additional HTML-formatted text to be included in the body of the email
* Automatically include a copy of the user's entry

= SPAM Protection =

* Automatically included on every form
* Uses a simple, yet effective, logic-based verification system
* [WordPress Nonce](http://codex.wordpress.org/WordPress_Nonces)


== Installation ==

1. Upload `visual-form-builder` to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress
1. Go to <em>Settings > Visual Form Builder</em>
1. Create and configure a form (for help, refer to the FAQ or the Help on the plugin page)
1. Copy the form shortcode from the Shortcode box on the plugin page
1. Create a new page and add the shortcode to the content.

== Frequently Asked Questions ==

= How do I build my form? =

1. Click on the + tab, give your form a name and click Create Form.
1. Click the form fields from the box on the left to add it to your form.
1. Edit the information for each form field by clicking on the down arrow.
1. Drag and drop the elements to put them in order.
1. Click Save Form to save your changes.

= What's the deal with the fieldsets? =

Fieldsets, a way to group form fields, are an essential piece of this plugin's HTML. As such, at least one fieldset is required and must be first in the order. Subsequent fieldsets may be placed wherever you would like to start your next grouping of fields.

= Can I use my own verification system such as a CAPTCHA? =

At this time, there is no alternative to the built-in anti-spam system.

= I'm not getting any emails! What's wrong? =

Some people have reported that after the form is submitted, no email is received.  If this is the case for you, it typically means that your server or web host has not properly configured their SMTP settings.

Try using a plugin such as [WP Mail SMTP](http://wordpress.org/extend/plugins/wp-mail-smtp/) to correct the issue.

= How do I customize the CSS? =

If you want to customize the appearance of the forms using your own CSS, here's how to do it:

1. Add this code to your theme's `functions.php` file: `add_filter( 'visual-form-builder-css', '__return_false' );`
1. Copy everything from `css/visual-form-builder.css` into your theme's `style.css`
1. Change the CSS properties in your theme's `style.css` as needed

If you want to customize the jQuery date picker CSS, follow these steps:

1. Add this code to your theme's `functions.php` file: `add_filter( 'vfb-date-picker-css', '__return_false' );`
1. Refer to the [jQuery UI Date Picker documentation on theming](http://jqueryui.com/demos/datepicker/#theming)

= How do I change the Date Picker configuration? =

The jQuery UI Date Picker is a complex and highly configurable plugin.  By default, Visual Form Builder's date field will use the default options and configuration.

To use the more complex features of the Date Picker plugin, you will need to:

1. Add a text field using Visual Form Builder
1. Save the form and use the shortcode to add it to a page
1. Use your browser to view the HTML source code
1. Find the text field you want to use and copy the ID (ex: start-date)
1. Using the above example ID, paste the following into your javascript file: `$( '#start-date' ).datepicker();`
1. Add and customize the [jQuery UI Date Picker configuration options](http://jqueryui.com/demos/datepicker)

= How do I translate the field validation text to my language? =

The validation messages (ex: 'This field is required' or 'Please enter a valid email address') are generated by the jQuery Form Validation plugin.

By default, these messages are in English.  To translate them, you must create a JavaScript file that contains your translations and insert it into your theme.

For instructions, [please go here](http://wordpress.org/support/topic/visual-form-builder-localization-problem?replies=8#post-2296212).

= How do I export my entries to a CSV? =

There are two ways to export your entries to a CSV: Export All or Export Selected.

To Export All:

1. Go to the Entries screen
1. Select the `Export All` option under the `Bulk Actions` dropdown
1. Click Apply and save the file

To Export Selected:

1. Go to the Entries screen
1. Check boxes next to the entries you wish to export
1. Select the `Export Selected` option under the `Bulk Actions` dropdown
1. Click Apply and save the file

== Screenshots ==

1. Visual Form Builder page
2. Configuring field item options
3. Entries management screen

== Changelog ==

**Version 2.0**

* Fix bug for misspelled languages folder
* Fix bug for slashes appearing in email and admin
* Fix bug for misaligned rows in CSV export
* Update admin notices functionality
* Update the way Addresses were handled during email
* Add Hungarian translation

**Version 1.9.2**

* Bug fix for copied forms with nested fields

**Version 1.9.1**

* Bug fix for Sender Name, Email, and Notification Email overrides

**Version 1.9**

* Add ability for fields to be nested underneath Fieldsets and Sections
* Add Section Form Item
* Update adding/deleting fields to use AJAX
* Update and improve admin tabs functionality
* Update new form building to no longer force require email details
* Update Delete Form link to require confirmation before deleting

**Version 1.8**

* Add Dynamic Add/Delete for Options for Radio, Select, and Checkbox fields
* Add Dynamic Add/Delete for Email(s) To field
* Add CSS Classes configuration option
* Update Instructions field to allow for images
* Submit button text value now customizable

**Version 1.7**

* Add Instructions Form Item
* Add Duplicate Form feature
* Add Sender Name and Sender Email customization fields to Notifications
* Update CSS

**Version 1.6**

* Fix bug where multiple address blocks could not be used
* Add internationalization support
* Add auto-respond feature to separately notify your users after form submission
* Update jQuery Validation to 1.8.1

**Version 1.5.1**

* Fix bug where missing jQuery prevented multiple form fix from working

**Version 1.5**

* Fix bug where multiple forms on same page could not be submitted individually
* Fix bug where Entries form filter did not work
* Update admin CSS to use it's own file instead of one loaded form WordPress

**Version 1.4**

* Fix bug where database charset wasn't being set and causing character encoding issues
* Fix date submitted to match local date and time settings
* Fix Textarea CSS to respond to large size
* Add File Upload and HTML Form Items
* Add Entries Export feature
* Update View Entries to full page view instead of jQuery show/hide quick view

**Version 1.3.1**

* Fix bug where new Confirmation screen was not being installed
* Fix bug where escaped names and descriptions were not being stripped of slashes properly
* Add missing sprite image for Form Items

**Version 1.3**

* Fix bug where jQuery validation was missing from security field
* Update Form Items UI to make it easier and quicker to add fields
* Add six more Form Items
* Add Confirmation customization
* Update CSS output for some elements

**Version 1.2.1**

* Fix bug where entries table does not install

**Version 1.2**

* Fix bug where reserved words may have been used
* Fix bug where multiple open validation dropdowns could not be used in the builder
* Add entries tracking and management feature
* Improve form submission by removing wp_redirect
* Add Sender Name and Email override

**Version 1.1**

* Fix bug that prevented all selected checkbox options from being submitted
* Add more help text on contextual Help tab
* Fix missing closing paragraph tag on success message

**Version 1.0**

* Plugin launch!

== Upgrade Notice ==

= 2.0 =
Bug fix misaligned rows in CSV export, misspelled languages folder, and slashes appearing in emails and admin. Other minor improvements.

= 1.9.2 =
Bug fix for copied form with nested fields.

= 1.9.1 =
Recommend update! Bug fix for Sender Name, Email, and Notification Email overrides.

= 1.9 =
Added Section Form Item, ability to nest fields under Fieldsets and Sections. Improve adding/deleting fields.

= 1.8 =
Submit button text now customizable (click Save Form to access). Added dynamic add/delete for Radio, Select, Checkboxes, and Email(s) To fields.

= 1.7 =
Added Instructions Form Item, Duplicate Form feature, and more customizations to the Notifications.

= 1.6 =
Added auto-responder feature, internationalization support, and fixed validation problems for IE users.

= 1.5.1 =
Fix bug where missing jQuery prevented multiple form fix from working.

= 1.5 =
Fix for submitting multiple forms on a single page. Other bug fixes and improvements.

= 1.4 =
Export entries to a CSV, file uploads, and various bug fixes.

= 1.3.1 =
Recommended update immediately! Fix for bug where confirmation screen does not install.

= 1.3 =
New, faster way to add form items and ability to customize Confirmation. Fix for validation on security field.

= 1.2.1 =
Recommended update immediately! Fix for bug where entries table does not install.