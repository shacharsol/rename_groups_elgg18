<?php
/**
 * Elgg groups plugin language pack
 *
 * @package Elgg$uplural
 */
$languagecode = get_current_language();
$singularvar = $languagecode . 'singular';
$pluralvar = $languagecode . 'plural';

$singular = elgg_get_plugin_setting($singularvar, 'rename_groups');
$plural = elgg_get_plugin_setting($pluralvar, 'rename_groups');

// set defaults if setting can't be found
if(empty($singular)){ $singular = elgg_echo('groups:group'); }
if(empty($plural)){ $plural = elgg_echo('groups'); }

// get first letter of each, and register variables for starting with uppercase and lowercase first letter
// $usingle = uppercase singluar eg. $usingle
// $lsingle = lowercase singluar eg. group
// $uplural = uppercase plural eg. $usingles
// $lplural = lowercase plural eg. groups

$lsingle = strtolower($singular);
$lplural = strtolower($plural);

//create our uppercase singular
$first_letter = strtoupper($singular[0]);
$rest_of_word = substr($singular, 1);

$usingle = $first_letter . $rest_of_word;

//create our uppercase plural
$first_letter = strtoupper($plural[0]);
$rest_of_word = substr($plural, 1);

$uplural = $first_letter . $rest_of_word;
 
 
$english = array(

	/**
	 * Menu items and titles
	 */
	'groups' => "$uplural",
	'groups:owned' => "$uplural I own",
	'groups:yours' => "My $plural",
	'groups:user' => "%s's $plural",
	'groups:all' => "All $plural",
	'groups:add' => "Create a new $lsingle",
	'groups:edit' => "Edit $lsingle",
	'groups:delete' => 'Delete ' . $lsingle .'',
	'groups:membershiprequests' => 'Manage join requests',
	'groups:invitations' => $usingle .' invitations',

	'groups:icon' => $usingle .' icon (leave blank to leave unchanged)',
	'groups:name' => $usingle .' name',
	'groups:username' => $lsingle .' short name (displayed in URLs, alphanumeric characters only)',
	'groups:description' => 'Description',
	'groups:briefdescription' => 'Brief description',
	'groups:interests' => 'Tags',
	'groups:website' => 'Website',
	'groups:members' => $usingle .' members',
	'groups:members:title' => 'Members of %s',
	'groups:members:more' => "View all members",
	'groups:membership' => "$usingle membership permissions",
	'groups:access' => "Access permissions",
	'groups:owner' => "Owner",
	'groups:widget:num_display' => 'Number of $lplural to display',
	'groups:widget:membership' => $lsingle .' membership',
	'groups:widgets:description' => 'Display the '.$lplural.' you are a member of on your profile',
	'$lplural:noaccess' => 'No access to ' . $lsingle .'',
	'groups:permissions:error' => 'You do not have the permissions for this',
	'groups:ingroup' => 'in the ' . $lsingle .'',
	'groups:cantedit' => 'You can not edit this ' . $lsingle .'',
	'groups:saved' => $lsingle .' saved',
	'groups:featured' => 'Featured '.$lplural,
	'groups:makeunfeatured' => 'Unfeature',
	'groups:makefeatured' => 'Make featured',
	'groups:featuredon' => '%s is now a featured '.$lsingle,
	'groups:unfeatured' => '%s has been removed from the featured '.$lplural,
	'groups:featured_error' => 'Invalid '.$lsingle,
	'groups:joinrequest' => 'Request membership',
	'groups:join' => 'Join ' . $lsingle .'',
	'groups:leave' => 'Leave ' . $lsingle .'',
	'groups:invite' => 'Invite friends',
	'groups:invite:title' => 'Invite friends to this ' . $lsingle .'',
	'groups:inviteto' => "Invite friends to '%s'",
	'groups:nofriends' => "You have no friends left who have not been invited to this $lsingle.",
	'groups:nofriendsatall' => 'You have no friends to invite!',
	'groups:viagroups' => "via $lplural",
	'groups:group' => "$usingle",
	'groups:search:tags' => "tag",
	'groups:search:title' => "Search for $lplural tagged with '%s'",
	'groups:search:none' => "No matching $lplural were found",
	'groups:search_in_group' => "Search in this $lsingle",
	'groups:acl' => "$usingle: %s",

	'groups:activity' => "$usingle activity",
	'groups:enableactivity' => 'Enable '. $lsingle.'  activity',
	'groups:activity:none' => "There is no $lsingle activity yet",

	'groups:notfound' => "$usingle not found",
	'groups:notfound:details' => "The requested $lsingle either does not exist or you do not have access to it",

	'groups:requests:none' => 'There are no current membership requests.',

	'groups:invitations:none' => 'There are no current invitations.',

	'item:object:groupforumtopic' => "Discussion topics",

	'groupforumtopic:new' => "Add discussion post",

	'groups:count' => "$lplural created",
	'groups:open' => "open $lsingle",
	'groups:closed' => "closed $lsingle",
	'groups:member' => "members",
	'groups:searchtag' => "Search for $lplural by tag",

	'groups:more' => 'More '.$lplural,
	'groups:none' => 'No '.$lplural,


	/*
	 * Access
	 */
	'groups:access:private' => 'Closed - Users must be invited',
	'groups:access:public' => 'Open - Any user may join',
	'groups:access:group' => $lsingle .' members only',
	'groups:closedgroup' => 'This '.$lsingle .'has a closed membership.',
	'groups:closedgroup:request' => 'To ask to be added, click the "request membership" menu link.',
	'groups:visibility' => 'Who can see this '.$lsingle.'?',

	/*
	$usingle tools
	*/
	'groups:enableforum' => 'Enable '. $lsingle .'  discussion',
	'groups:yes' => 'yes',
	'groups:no' => 'no',
	'groups:lastupdated' => 'Last updated %s by %s',
	'groups:lastcomment' => 'Last comment %s by %s',

	/*
	$usingle discussion
	*/
	'discussion' => 'Discussion',
	'discussion:add' => 'Add discussion topic',
	'discussion:latest' => 'Latest discussion',
	'discussion:group' => $usingle .' discussion',
	'discussion:none' => 'No discussion',
	'discussion:reply:title' => 'Reply by %s',

	'discussion:topic:created' => 'The discussion topic was created.',
	'discussion:topic:updated' => 'The discussion topic was updated.',
	'discussion:topic:deleted' => 'Discussion topic has been deleted.',

	'discussion:topic:notfound' => 'Discussion topic not found',
	'discussion:error:notsaved' => 'Unable to save this topic',
	'discussion:error:missing' => 'Both title and message are required fields',
	'discussion:error:permissions' => 'You do not have permissions to perform this action',
	'discussion:error:notdeleted' => 'Could not delete the discussion topic',

	'discussion:reply:deleted' => 'Discussion reply has been deleted.',
	'discussion:reply:error:notdeleted' => 'Could not delete the discussion reply',

	'reply:this' => 'Reply to this',

	'group:replies' => 'Replies',
	'groups:forum:created' => 'Created %s with %d comments',
	'groups:forum:created:single' => 'Created %s with %d reply',
	'groups:forum' => 'Discussion',
	'groups:addtopic' => 'Add a topic',
	'groups:forumlatest' => 'Latest discussion',
	'groups:latestdiscussion' => 'Latest discussion',
	'groups:newest' => 'Newest',
	'groups:popular' => 'Popular',
	'groupspost:success' => 'Your reply was succesfully posted',
	'groups:alldiscussion' => 'Latest discussion',
	'groups:edittopic' => 'Edit topic',
	'groups:topicmessage' => 'Topic message',
	'groups:topicstatus' => 'Topic status',
	'groups:reply' => 'Post a comment',
	'groups:topic' => 'Topic',
	'groups:posts' => 'Posts',
	'groups:lastperson' => 'Last person',
	'groups:when' => 'When',
	'grouptopic:notcreated' => 'No topics have been created.',
	'groups:topicopen' => 'Open',
	'groups:topicclosed' => 'Closed',
	'groups:topicresolved' => 'Resolved',
	'grouptopic:created' => 'Your topic was created.',
	'groupstopic:deleted' => 'The topic has been deleted.',
	'groups:topicsticky' => 'Sticky',
	'groups:topicisclosed' => 'This discussion is closed.',
	'groups:topiccloseddesc' => 'This discussion is closed and is not accepting new comments.',
	'grouptopic:error' => 'Your '.$lsingle.' topic could not be created. Please try again or contact a system administrator.',
	'groups:forumpost:edited' => "You have successfully edited the forum post.",
	'groups:forumpost:error' => "There was a problem editing the forum post.",


	'groups:privategroup' => 'This '.$lsingle.' is closed. Requesting membership.',
	'groups:notitle' => $uplural .' must have a title',
	'groups:cantjoin' => 'Can not join ' . $lsingle .'',
	'groups:cantleave' => 'Could not leave ' . $lsingle .'',
	'groups:removeuser' => 'Remove from ' . $lsingle .'',
	'groups:cantremove' => 'Cannot remove user from ' . $lsingle .'',
	'groups:removed' => 'Successfully removed %s from ' . $lsingle .'',
	'groups:addedtogroup' => 'Successfully added the user to the ' . $lsingle .'',
	'groups:joinrequestnotmade' => 'Could not request to join ' . $lsingle .'',
	'groups:joinrequestmade' => 'Requested to join ' . $lsingle .'',
	'groups:joined' => 'Successfully joined '.$lsingle.'!',
	'groups:left' => 'Successfully left ' . $lsingle .'',
	'groups:notowner' => 'Sorry, you are not the owner of this '.$lsingle,
	'groups:notmember' => 'Sorry, you are not a member of this '.$lsingle,
	'groups:alreadymember' => 'You are already a member of this '.$lsingle.'!',
	'groups:userinvited' => 'User has been invited.',
	'groups:usernotinvited' => 'User could not be invited.',
	'groups:useralreadyinvited' => 'User has already been invited',
	'groups:invite:subject' => "%s you have been invited to join %s!",
	'groups:updated' => "Last reply by %s %s",
	'groups:started' => "Started by %s",
	'groups:joinrequest:remove:check' => 'Are you sure you want to remove this join request?',
	'groups:invite:remove:check' => 'Are you sure you want to remove this invite?',
	'groups:invite:body' => "Hi %s,

%s invited you to join the '%s' $lsingle. Click below to view your invitations:

%s",

	'groups:welcome:subject' => "Welcome to the %s $lsingle!",
	'groups:welcome:body' => "Hi %s!

You are now a member of the '%s' $lsingle! Click below to begin posting!

%s",

	'groups:request:subject' => "%s has requested to join %s",
	'groups:request:body' => "Hi %s,

%s has requested to join the '%s' $lsingle. Click below to view their profile:

%s

or click below to view the ' . $lsingle .''s join requests:

%s",

	/*
		Forum river items
	*/

	'river:create:group:default' => '%s created the '.$lsingle.' %s',
	'river:join:group:default' => '%s joined the '.$lsingle.' %s',
	'river:create:object:groupforumtopic' => '%s added a new discussion topic %s',
	'river:reply:object:groupforumtopic' => '%s replied on the discussion topic %s',
	
	'groups:nowidgets' => 'No widgets have been defined for this '.$lsingle.'.',


	'groups:widgets:members:title' => $usingle .' members',
	'groups:widgets:members:description' => 'List the members of a '.$lsingle.'.',
	'groups:widgets:members:label:displaynum' => 'List the members of a '.$lsingle.'.',
	'groups:widgets:members:label:pleaseedit' => 'Please configure this widget.',

	'groups:widgets:entities:title' => "Objects in $lsingle",
	'groups:widgets:entities:description' => "List the objects saved in this $lsingle",
	'groups:widgets:entities:label:displaynum' => 'List the objects of a '.$lsingle.'.',
	'groups:widgets:entities:label:pleaseedit' => 'Please configure this widget.',

	'groups:forumtopic:edited' => 'Forum topic successfully edited.',

	'groups:allowhiddengroups' => 'Do you want to allow private (invisible) '.$lplural.'?',

	/**
	 * Action messages
	 */
	'group:deleted' => $lsingle .' and $lsingle contents deleted',
	'group:notdeleted' => $lsingle .' could not be deleted',

	'group:notfound' => 'Could not find the ' . $lsingle .'',
	'grouppost:deleted' => $lsingle .' posting successfully deleted',
	'grouppost:notdeleted' => $lsingle .' posting could not be deleted',
	'groupstopic:deleted' => 'Topic deleted',
	'groupstopic:notdeleted' => 'Topic not deleted',
	'grouptopic:blank' => 'No topic',
	'grouptopic:notfound' => 'Could not find the topic',
	'grouppost:nopost' => 'Empty post',
	'groups:deletewarning' => "Are you sure you want to delete this $lsingle? There is no undo!",

	'groups:invitekilled' => 'The invite has been deleted.',
	'groups:joinrequestkilled' => 'The join request has been deleted.',

	// ecml
	'groups:ecml:discussion' => $lsingle .' Discussions',
	'groups:ecml:groupprofile' => $lsingle .' profiles',

/*
	 * 	Blog plugin
	 */
	'groups:enableblog' => 'Enable ' . $lsingle . ' blog',
	'blog:enableblog' => 'Enable ' . $lsingle . ' blog',
	'blog:group' => $usingle . ' blog',
	 'blog:nogroup' => 'This ' . $lsingle . ' does not have any blog posts yet',

	/*
	** bookmarks plugin
	*/
	'bookmarks:bookmarklet:group' => "Get " . $lsingle . " bookmarklet",
	'bookmarks:group' => $usingle . ' bookmarks',
	'bookmarks:enablebookmarks' => 'Enable ' . $lsingle . ' bookmarks',
	'groups:enablebookmarks' => 'Enable ' . $lsingle . ' bookmarks',
	'bookmarks:nogroup' => 'This ' . $lsingle . ' does not have any bookmarks yet',

	/*
	 * 	Custom Index plugin
	 */
	'custom:groups' => "Latest " . $lplural,
	'custom:nogroups' => "There are no " . $lplural . " yet",

	/*
	** event_calendar plugin
	*/
	'event_calendar:group' => $usingle . " calendar",
	'event_calendar:settings:group_profile_display:title' => $usingle . " calendar profile display (if community calendars are enabled)",
	'event_calendar:settings:autogroup:title' => "Automatically add " . $lsingle . " events for all members to their personal calendars.",
	'event_calendar:settings:group_calendar:title' => $usingle . " calendars",
	'event_calendar:settings:group_calendar:admin' => "yes, only admins and " . $lsingle . " owners can post events",
	'event_calendar:settings:group_calendar:members' => "yes, any " . $lsingle . " member can post an event",
	'event_calendar:settings:group_default:title' => "New " . $lplural . " should by default have a community calendar (if " . $lsingle . " calendars are enabled)",
	'event_calendar:settings:group_default:no' => "no (but admins or " . $lsingle . " owners can turn a " . $lsingle . " calendar on if desired)",
	'event_calendar:settings:group_default:yes' => "yes (but admins or " . $lsingle . " owners can turn a " . $lsingle . " calendar off if desired)",
	'event_calendar:settings:group_always_display:title' => "If " . $lsingle . " calendar is enabled, always display it (even if empty)",
	'event_calendar:enable_event_calendar' => "Enable " . $lsingle . " event calendar",
	'event_calendar:add_to_group:remove_group_title' => "Remove this event from " . $lsingle,
	'event_calendar:add_to_group:remove_group_button' => "Remove from " . $lsingle,
	'event_calendar:remove_from_group:success' => "Event removed from " . $lsingle . " calendar",
	'event_calendar:add_to_group:add_group_title' => "Add this event to " . $lsingle,
	'event_calendar:add_to_group:add_group_button' => "Add to " . $lsingle,
	'event_calendar:add_to_group:success' => "Event added to " . $lsingle . " calendar",
	'event_calendar:settings:add_to_group_calendar:title' => "Allow " . $lsingle . " admins to add any existing event to a $lsingle calendar",

	/*
	** file plugin
	*/
	'file:group' => $usingle . " files",
	'file:nogroup' => 'This ' . $lsingle . ' does not have any files yet',

	/*
	** group_contact_list plugin
	*/
	'groupclist:title' => $usingle . ' Contact List',
	'groupclist:title_users' => $usingle . ' Contact List: select/unselect community users',
	'groupclist:totalpages' => 'Total ' . $uplural . ':',
	'groupclist:delete:yes' => $usingle . ' deleted',
	'groupclist:delete:no' => 'Error: ' . $usingle . ' not deleted',
	'groupclist:addmember:yes' => 'All selected users are now ' . $lsingle . ' members',
	'groupclist:addmember:no' => 'Error adding user to ' . $lsingle,
	
	/*
	 * Group Custom Layout plugin
	 */
	'group_custom_layout' => $usingle . " Custom Layout",
	'item:object:group_widget' => $usingle . " Widget",
	'item:object:custom_layout' => $usingle . " Custom Layout",
	'group_custom_layout:edit' => "Edit " . $usingle . " Layout",
	'group_custom_layout:edit:title' => "Edit " . $usingle . " Layout",
	'group_custom_layout:edit:reset:confirm' => "Are you sure you wish to reset the custom " . $lsingle . " layout?",
	'group_custom_layout:action:reset:error:no_custom' => "This " . $lsingle . " doesn't have a Custom Layout to remove",
	'group_custom_layout:action:save:error:add_to_group' => "Error while adding Custom Layout to " . $lsingle,
	'group_custom_layout:action:save:error:no_widget' => "No " . $usingle . " Widget for id: %s",
	'group_custom_layout:action:save:error:widget_save' => "Error while saving " . $usingle . " Widget: %s",


	/*
	** notifications plugin
	*/
	'notifications:subscriptions:changesettings:groups' => $usingle . ' notifications',
	'notifications:subscriptions:groups:description' => 'To receive notifications when new content is added to a ' . $lsingle . ' you are a member of, find it below and select the notification method you would like to use.',

	/*
	** pages plugin
	*/
	'pages:group' => $usingle . ' pages',
	'pages:groupprofile' => $usingle . ' pages',
	'pages:nogroup' => 'This ' . $lsingle . ' does not have any pages yet',

	/*
	 * Polls plugin
	 */
	'polls:group_polls' => $usingle . " polls",
	'polls:settings:group:title' => $usingle . " polls",
	'polls:settings:group_profile_display:title' => "If " . $lsingle . " polls are activated, where should polls content be displayed in " . $lsingle . " profiles?",
	'polls:settings:group_access:title' => "If " . $lsingle . " polls are activated, who gets to create polls?",
	'polls:settings:group_access:admins' => $lsingle . " owners and admins only",
	'polls:settings:group_access:members' => "any " . $lsingle . " member",
	'poll_individual_group:widget:description' => "Display the latest poll for this " . $lsingle . ".",

	/*
	 * 	Tidypics plugin
	 */
	'album:group' => $usingle . " albums",
	'tidypics:enablephotos' => 'Enable ' . $lsingle . ' photo albums',
	'tidypics:nophotosingroup' => 'This ' . $lsingle . ' does not have any photos yet',
	'tidypics:settings:grp_perm_override' => "Allow ' . $lsingle . ' members full access to ' . $lsingle . ' albums",
	'tidypics:settings:quota' => "User/" . $usingle . " Quota (MB) - 0 equals no quota",
	'tidypics:settings:heading:groups' => $usingle . " Settings",
	'album:river:group' => "in the " . $lsingle,

	/*
	** vazco_groupmailer plugin
	*/
	'vazco_groupmailer:send' => 'Send ' . $lsingle . ' e-mail',
	'vazco_groupmailer:send:menu' => 'Send ' . $lsingle . ' e-mail',
	'vazco_groupmailer:nogroup' => 'No ' . $lsingle . ' was chosen',
	'vazco_groupmailer:norights' => 'You have no rights to send mass e-mail to this ' . $lsingle,
	'vazco_groupmailer:description' => 'This form allows you to send e-mails to all the ' . $lsingle . ' members.<br/>
<br/>You can use the following special markers:<br/>
{$message_receiver} - the receiver of the message',
	'phpmailer:template:settings' => 'Set template for the messages sent to ' . $lplural . '. You can use the following markers:<br/><br/>
{$message_body} - the context of the message<br/>
{$message_title} - the title of the message<br/>
{$message_sender} - the name of the sender of the message<br/>
{$message_receiver} - the name of the receiver of the message',

	/*
	** vazco_mainpage plugin
	*/
	'custom:groups' => 'Latest ' . $lplural,
	'custom:featuredgroups' => 'Featured ' . $lplural,
	'custom:groupicons' => 'Latest ' . $lplural . ' (icons)',
	'custom:groups:desc' => 'Shows latest ' . $lplural,
	'custom:featuredgroups:desc' => 'Displays featured ' . $lplural,
	'custom:groupicons:desc' => 'Displays latest ' . $lplural . ' as icons. Displays only communities that have icons.',

	//
	//	rename_groups language mappings
	//
	'rename_groups:language' => "Language",
	'rename_groups:missing:language:file' => "Langauge file appears to be missing.  Check that it exists and that the languages directory has read access.",
	'rename_groups:plural' => "Plural",
	'rename_groups:settings' => "Rename Groups for each language",
	'rename_groups:singular' => "Singular",
	
	//pages 1.8.3
	'pages:group' => "$usingle pages",
	'groups:enablepages' => 'Enable '.$lsingle.' pages',
	'pages:nogroup' => 'This '.$lsingle.' does not have any pages yet',
	
	// blog 1.8.3
	'blog:group' => $usingle.' blog',
	'blog:enableblog' => 'Enable '.$lsingle.' blog',
	'blog:error:cannot_write_to_container' => 'Insufficient access to save blog to '.$lsingle.'.',
	
);

add_translation("en", $english);