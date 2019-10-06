=== WP Portfolio Showcase ===
Contributors: princeahmed
Tags: portfolio, showcase, gallery
Requires at least: 4.4
Tested up to: 5.2.3
Requires PHP: 5.6
Stable tag: trunk
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

The worldwide Radio station directory plugin for WordPress to create great live online radio streaming website in no time.

== Description ==

DESC......


== WordPress Radio Plugin Features: ==

*   Feature....


== INSTALLATION AND USAGE: ==

The installation is fairly simple and straightforward. If you have ever installed any WordPress plugin, then there is nothing new for you.

1.  After installing the plugin, activate the plugin.

2.  After you have successfully activated the plugin, Radio Stations Menu will appear in your WordPress Dashboard sidebar menu. And also a page named "Radio Stations" will be created after activating the plugin.

    The **Radio Stations** page is the default station archive page, where all the stations will be listed.

    On this page, Visitor will see their country’s radio stations. If there is no station in the page of the visitor’s country, then visitors will see all the station, those you have added or imported.

3.  You can use the the automatically created **Radio Stations** page for your radio station listing page.

    Or, you can Use `[wp_radio_listing]` short code on any page for the station listing page.

    This shor tcode support **country** and **genre** attribute. Where you can filter station list by countries. See our [Documentation](https://wpradio.princeboss.com/documentation/shortcodes/), how to use the shortcodes of this plugin.


== ADD NEW STATION: ==

You can add unlimited new radio station very easily.
For adding a new radio station you need to click the **Add New Station** submenu under the Radio Stations main menu.
See our [Documentation](https://wpradio.princeboss.com/documentation/add-new-station/), how you can add new radio station very easily.

== SHORT CODES: ==

The Plugin provides 5 Short Codes. Those are:

1.  `[wp_radio_listing]` - Use this short code in a page for listing the radio stations. This short code supports **country** && **genre** attributes where you can pass comma separated country code and genre.

    **Example:** `[wp_radio_listing country="us, ru, bd" genre="rock,news"]`



== SETTINGS: ==

On the Settings page, under the Page settings tab, you can select the page for default listing of the radio stations.

On the layout tab, you can select the template layout. Whether you want to show the country list sidebar in the listing or not.
If you want to show the country list sidebar in Country and Genres archive page, Turn off the Hide country list switcher. Hide country list default is on.

If you want to hide the footer fixed player, you can hide the player by turning on the "Hide Footer Player" setting in the player settings tab.

If you want to enable the popup player, you need to turn the **Enable Popup Player**. This feature is only available in Premium version.

If you want to delete all the data of this plugin (Radio stations, countries, genres, settings) on uninstalling of this plugin, you need to turn on the "Delete Data on Plugin Deactivation" setting field in General Settings Tab.

See our [Documentation](https://wpradio.princeboss.com/documentation/settings/), to learn how to use the settings options of this plugin.


== HOW DOES IT WORK / FUNCTIONALITY EXPLAINED: ==

After activating the plugin you can create new Radio station from Add new station page  or you can import stations from Import page under the WP Radio menu.

After installing the plugin a new page will be created titled "Radio Stations".
This page will be used for viewing the radio station listing. User can browse radio stations in this page.
While playing online radio streaming, a radio player will be fixed at the bottom of the website, in every page.

You can place the radio player anywhere you want, by using the `[wp_radio_player]` shortcode.

In the "Radio Stations" page visitor will see their country's stations first. For detecting user's country a third party service has been used.
Here is the [link](http://ip-api.com/ "ip-api.com") of the service and here is the [Terms and Policies](http://ip-api.com/docs/legal "Terms and Policies") of the service.


== Compatibility ==

WP Radio has no dependency on any others plugin or theme. You can use WP Radio plugin with any theme.

Sometimes the some section's design of this plugin may be changed a little bit for the installed theme's incompatibility layout design in your site.

You should at least have PHP version – 5.6 for the smooth operation of this state-of-the-art plugin. We tested this plugin thoroughly to make sure it operates seamlessly under every situation. We did not detect any problem or conflict during our test. Still, we are open to issues as we understand that WordPress is a vast ecosystem and anything can happen.

== NOTES: ==

It is important to note that, all the channels might not work for you all the time. Because there are some radio channels who stop streaming after a certain time of the day. So, please if you find an channel not working; try again later. After a couple of hours, you should find that station working.

== CONTRIBUTE ==

This may have bugs and lack of features. If you want to contribute to this project, you are more than welcome. Please open an issue on [GITHUB Repository](https://github.com/princeahmed/wp-radio)


== Frequently Asked Questions ==

= Can I ask/suggest for a new feature? =
Yes, of course. We do not create products for ourselves. You are always welcome to suggest new features and improvements.


== Screenshots ==

1. Caption


== Changelog ==
= 1.0.0 (26 June,2019) =
*   Initial release

