<?php
// Copyright 2014 Alyreza Mahmoudy
// This file is part of esoTalk. 
//report bug here:https://github.com/ALYREZA/esoTalk-Persian-language/issues

ET::$languageInfo["Persian"] = array(
	"locale" => "fa-IR",
	"name" => "Persian",
	"description" => "یک ترجمه ی شخصی به زبان شیرین فارسی",
	"version" => ESOTALK_VERSION,
	"author" => "Alyreza Mahmoudy",
	"authorEmail" => "support@esotalk.org",
	"authorURL" => "https://github.ocm/alyreza",
	"license" => "MIT"
);

// Define the character set that this language uses.
$definitions["charset"] = "utf-8";

$definitions["date.full"] = "j M Y, g:ia \G\M\TO"; // see http://au.php.net/manual/en/function.date.php for details

$definitions["%d day ago"] = "دیروز";
$definitions["%d days ago"] = "%d روز پیش";
$definitions["%d hour ago"] = "1 ساعت پیش";
$definitions["%d hours ago"] = " تقریبا %d ساعت پیش ";
$definitions["%d minute ago"] = "1 دقیقه پیش";
$definitions["%d minutes ago"] = "%d دققه پیش";
$definitions["%d month ago"] = "1 ماه پیش";
$definitions["%d months ago"] = "%d ماه پیش";
$definitions["%d second ago"] = "1 ثانیه پیش";
$definitions["%d seconds ago"] = "%d ثانیه پیش";
$definitions["%d week ago"] = "هفته ی گذشته";
$definitions["%d weeks ago"] = "%d هفته پیش";
$definitions["%d year ago"] = "سال گذشته";
$definitions["%d years ago"] = "%d سال پیش";

$definitions["%s and %s"] = "%s و %s";
$definitions["%s can view this conversation."] = "%s می توانند این گفتگو را مشاهده کنند.";
$definitions["%s changed %s's group to %s."] = "%s تغییر یافته به گروه %s.";
$definitions["%s changed your group to %s."] = "%s گروه شما تغییر یافت به %s.";
$definitions["%s conversation"] = "%s گفتگو";
$definitions["%s conversations"] = "%s گفتگوها";
$definitions["%s invited you to %s."] = "%s دعوت کرده  از شما برای پیوستن به %s.";
$definitions["%s joined the forum."] = "%s پیوست به انجمن.";
$definitions["%s post"] = "%s مطلب";
$definitions["%s posted %s"] = "%s ارسال کرد %s";
$definitions["%s posted in %s."] = "%s ارسال شده در %s.";
$definitions["%s posts"] = "%s مطلب";
$definitions["%s reply"] = "%s پاسخ";
$definitions["%s replies"] = "%s پاسخ ";
$definitions["%s Settings"] = "%s تنظیمات";
$definitions["%s started the conversation %s."] = "%s شروع کرد گفتگو را %s.";
$definitions["%s tagged you in a post."] = "%s شما را مخاطب قرار داده است.";
$definitions["%s will be able to view this conversation."] = "%s می توانند این گفتگو را مشاهده کنند.";
$definitions["%s will be able to:"] = "%s می توانند:";

$definitions["Success!"] = "ثبت شد!";
$definitions["A new version of esoTalk (%s) is available."] = "A new version of esoTalk (%s) is available.";
$definitions["a private conversation"] = "یک گفتگوی خصوصی";
$definitions["Access the administrator control panel."] = "دسترسی به کنترل پنل مدیریت.";
$definitions["Account type"] = "نوع حساب";
$definitions["Activate"] = "فعال کردن";
$definitions["Activity"] = "فعالیت";
$definitions["Add"] = "اضافه کردن";
$definitions["Administration"] = "مدیریت";
$definitions["Administrator email"] = "پست الکترونیکی مدیر";
$definitions["Administrator password"] = "گذرواژه مدیر";
$definitions["Administrator username"] = "نام کاربری مدیر";
$definitions["Advanced options"] = "تنظیمات پیشرفته";
$definitions["All Channels"] = "همه ی انجمن ها";
$definitions["Allow members to edit their own posts:"] = "اجازه دادن به کاربر برای ویرایش مطلب خودش :";
$definitions["Already have an account? <a href='%s' class='link-login'>Log in!</a>"] = "تاکنون حساب کاربری نساخته اید ? <a href='%s' class='link-login'>ورود!</a>";
$definitions["Appearance"] = "ظاهر";
$definitions["Automatically star conversations that I reply to"] = "به صورت خودکار دنبال کن مطالبی را که من به آنها پاسخ داده ام";
$definitions["Avatar"] = "نماد";

$definitions["Back to channels"] = "بازگشت به انجمن ها";
$definitions["Back to conversation"] = "بازگشت به گفتگو";
$definitions["Back to member"] = "بازگشت به عضو";
$definitions["Back to members"] = "بازگشت به اعضاء";
$definitions["Back to search"] = "بازگشت به جستجو";
$definitions["Background color"] = "رنگ پس زمینه";
$definitions["Background image"] = "عکس پس زمینه";
$definitions["Base URL"] = "آدرس پایه ای";
$definitions["Bold"] = "Bold";
$definitions["By %s"] = "به وسیله %s";

$definitions["Can suspend/unsuspend members"] = "می توانید مسدود/نامسدود کنید اعضائ را";
$definitions["Cancel"] = "لغو کردن";
$definitions["Change %s's Permissions"] = "تغییر سطح دسترسی %s";
$definitions["Change avatar"] = "تغییر نماد";
$definitions["Change Channel"] = "تغییر انجمن";
$definitions["Change channel"] = "تغییر انجمن";
$definitions["Change username"] = "تغییر نام کاربری";
$definitions["Change Password or Email"] = "تغییر گذرواژه یا پست الکترونیکی";
$definitions["Change Password"] = "تغییر گذر واژه";
$definitions["Change password"] = "تغییر گذر واژه";
$definitions["Change permissions"] = "تغییر سطح دسترسی ها";
$definitions["Change"] = "تغییر";
$definitions["Channel description"] = "توضیحات انجمن";
$definitions["Channel List"] = "لیست انجمن";
$definitions["Channel title"] = "عنوان انجمن";
$definitions["Channel slug"] = "آدرس انجمن";
$definitions["Channels"] = "انجمن ها";
$definitions["Choose a secure password of at least %s characters"] = "انتخاب کنید یک گذرواژه مطمئن که حداقل %s کاراکتر داشته باشد.";
$definitions["Choose what people will see when they first visit your forum."] = "انتخاب کنید افراد چه ببینند وقتی برای اولین بار به انجمن شما سر می زنند.";
$definitions["Click on a member's name to remove them."] = "روی نام کاربر کنید کنید تا حذف شود.";
$definitions["Close registration"] = "بستن عضو گیری";
$definitions["Confirm password"] = "تکرار گذرواژه";
$definitions["Context"] = "متن";
$definitions["Controls"] = "کنترل ها";
$definitions["Conversation"] = "گفتگو";
$definitions["Conversations participated in"] = "گفتگوهای شرکت داده شده";
$definitions["Conversations started"] = "شروع کننده ی گفتگو";
$definitions["Conversations"] = "گفتگوها";
$definitions["Copy permissions from"] = "کپی کردن سطح دسترسی از";
$definitions["Create Channel"] = "ساختن انجمن";
$definitions["Create Group"] = "ساختن گروه";
$definitions["Create Member"] = "کاربر جدید";
$definitions["Customize how users can become members of your forum."] = "مشخص کنید که کاربران چگونه عضو انجمن شما شوند.";
$definitions["Customize your forum's appearance"] = "Customize your forum's appearance";

$definitions["Dashboard"] = "Dashboard";
$definitions["Default forum language"] = "Default forum language";
$definitions["<strong>Delete</strong> all conversations forever."] = "<strong>Delete</strong> all conversations forever.";
$definitions["Delete Channel"] = "حذف انجمن";
$definitions["Delete conversation"] = "Delete conversation";
$definitions["Delete member"] = "Delete member";
$definitions["Delete Member"] = "Delete Member";
$definitions["<strong>Delete this member's posts.</strong> All of this member's posts will be marked as deleted, but will be able to be restored manually."] = "<strong>Delete this member's posts.</strong> All of this member's posts will be marked as deleted, but will be able to be restored manually.";
$definitions["Delete"] = "حذف";
$definitions["Deleted %s by %s"] = "Deleted %s by %s";
$definitions["Disable"] = "قابل صرفنظر";
$definitions["Discard"] = "صرفنظر کردن";
$definitions["Don't have an account? <a href='%s' class='link-join'>Sign up!</a>"] = "حساب کاربری ندارید ؟ <a href='%s' class='link-join'>یکی بسازید !</a>";
$definitions["Don't repeat"] = "Don't repeat";

$definitions["Edit Channel"] = "ویرایش انجمن";
$definitions["Edit Group"] = "Edit Group";
$definitions["Edit member groups"] = "Edit member groups";
$definitions["Edit your profile"] = "ویرایش صفحه شخصی";
$definitions["Edit"] = "ویرایش";
$definitions["Edited %s by %s"] = " %s  بوسیله ی %s ویرایش شده.";
$definitions["Editing permissions"] = "Editing permissions";
$definitions["Email me when I'm added to a private conversation"] = "Email me when I'm added to a private conversation";
$definitions["Email me when someone posts in a conversation I have starred"] = "Email me when someone posts in a conversation I have followed";
$definitions["Email"] = "پست الکترونیکی";
$definitions["Enable"] = "Enable";
$definitions["Enabled"] = "Enabled";
$definitions["Enter a conversation title"] = "انتخاب عنوان گفتگو";
$definitions["Error"] = "Error";
$definitions["esoTalk version"] = "esoTalk version";
$definitions["Everyone"] = "همه کاربران";

$definitions["Fatal Error"] = "برای نمایش این انجمن مشکلی پیش آمده ...";
$definitions["Feed"] = "Feed";
$definitions["Filter by name or group..."] = "جستجو بر اساس نام یا اسم گروه ...";
$definitions["Filter conversations..."] = "بگرد تا بگردیم ...";
$definitions["Find this post"] = "Find this post";
$definitions["First posted"] = "اولین مطلب";
$definitions["Follow to receive notifications"] = "دنبال کنید تا از تغییرات مطلع شوید.";
$definitions["For %s seconds"] = "For %s seconds";
$definitions["Forever"] = "برای همیشه";
$definitions["Forgot?"] = "را فراموش کرده اید ؟";
$definitions["Forgot Password"] = "آیا گذرواژه ی خود را فراموش کرده اید ؟";
$definitions["Forum header"] = "Forum header";
$definitions["Forum language"] = "Forum language";
$definitions["Forum Settings"] = "Forum Settings";
$definitions["Forum Statistics"] = "Forum Statistics";
$definitions["Forum title"] = "Forum title";
$definitions["forumDescription"] = "%s is a web-forum discussing %s, and %s.";

$definitions["Give this group the 'moderate' permission on all existing channels"] = "Give this group the 'moderate' permission on all existing channels";
$definitions["Global permissions"] = "Global permissions";
$definitions["Go to top"] = "برو بالا";
$definitions["Group name"] = "Group name";
$definitions["group.administrator"] = "مدیر کل";
$definitions["group.administrator.plural"] = "Administrators";
$definitions["group.guest"] = "Guest";
$definitions["group.guest.plural"] = "Guests";
$definitions["group.member"] = "Member";
$definitions["group.member.plural"] = "کاربران سایت";
$definitions["group.Moderator"] = "Moderator";
$definitions["group.Moderator.plural"] = "Moderators";
$definitions["group.suspended"] = "Suspended";
$definitions["Groups can be used to categorize members and give them certain privileges."] = "Groups can be used to categorize members and give them certain privileges.";
$definitions["Groups"] = "Groups";

$definitions["Header"] = "Header";
$definitions["Header color"] = "Header color";
$definitions["Hide"] = "Hide";
$definitions["Home page"] = "Home page";
$definitions["HTML is allowed."] = "HTML is allowed.";

$definitions["If you run into any other problems or just want some help with the installation, feel free to ask for assistance at the <a href='%s'>esoTalk support forum</a>."] = "If you run into any other problems or just want some help with the installation, feel free to ask for assistance at the <a href='%s'>esoTalk support forum</a>.";
$definitions["Install esoTalk"] = "Install esoTalk";
$definitions["Install My Forum"] = "Install My Forum";
$definitions["Installed Languages"] = "Installed Languages";
$definitions["Installed Plugins"] = "Installed Plugins";
$definitions["Installed plugins"] = "Installed plugins";
$definitions["Installed Skins"] = "Installed Skins";
$definitions["Installed skins"] = "Installed skins";
$definitions["is %s"] = "is %s";

$definitions["Joined"] = "زمان پیوستن به انجمن";
$definitions["Jump to last"] = "Jump to last";
$definitions["Jump to unread"] = "Jump to unread";
$definitions["just now"] = "هم اکنون";

$definitions["Keep me logged in"] = "مرا به خاطر بسپار";
$definitions["<strong>Keep this member's posts.</strong> All of this member's posts will remain intact, but will show [deleted] as the author."] = "<strong>Keep this member's posts.</strong> All of this member's posts will remain intact, but will show [deleted] as the author.";

$definitions["label.draft"] = "Draft";
$definitions["label.locked"] = "Locked";
$definitions["label.muted"] = "Muted";
$definitions["label.private"] = "Private";
$definitions["label.sticky"] = "Sticky";
$definitions["Labels"] = "Labels";
$definitions["Last active"] = "آخرین فعالیت";
$definitions["Last active %s"] = "آخرین فعالیت %s ";
$definitions["Latest News"] = "Latest News";
$definitions["Loading..."] = "Loading...";
$definitions["Lock"] = "قفل";
$definitions["Log In"] = "ورود";
$definitions["Log Out"] = "بیرون رفت";

$definitions["Make member and online list visible to:"] = "Make member and online list visible to:";
$definitions["Manage Groups"] = "Manage Groups";
$definitions["Manage Languages"] = "Manage Languages";
$definitions["Manage your forum's channels (categories)"] = "Manage your forum's channels (categories)";
$definitions["Mark as read"] = "Mark as read";
$definitions["Mark all as read"] = "Mark all as read";
$definitions["Mark listed as read"] = "Mark listed as read";
$definitions["Maximum size of %s. %s."] = "Maximum size of %s. %s.";
$definitions["Member groups"] = "Member groups";
$definitions["Member list"] = "لیست کاربران سایت";
$definitions["Member List"] = "لیست کاربران سایت";
$definitions["Member privacy"] = "Member privacy";
$definitions["Members Allowed to View this Conversation"] = "Members Allowed to View this Conversation";
$definitions["Members Online"] = "Members Online";
$definitions["Members"] = "Members";
$definitions["Mobile skin"] = "Mobile skin";
$definitions["Moderate"] = "Moderate";
$definitions["<strong>Move</strong> conversations to the following channel:"] = "<strong>Move</strong> conversations to the following channel:";
$definitions["Mute conversation"] = "Mute conversation";
$definitions["MySQL database"] = "MySQL database";
$definitions["MySQL host address"] = "MySQL host address";
$definitions["MySQL password"] = "MySQL password";
$definitions["MySQL queries"] = "MySQL queries";
$definitions["MySQL table prefix"] = "MySQL table prefix";
$definitions["MySQL username"] = "MySQL username";
$definitions["MySQL version"] = "MySQL version";

$definitions["Name"] = "نام";
$definitions["never"] = "never";
$definitions["%s new"] = "%s پاسخ جدید";
$definitions["New conversation"] = "ایجاد گفتگوی جدید";
$definitions["New Conversation"] = "ایجاد گفتگوی جدید";
$definitions["New conversations in the past week"] = "New conversations in the past week";
$definitions["New email"] = "پست الکترونیکی جدید";
$definitions["New members in the past week"] = "New members in the past week";
$definitions["New password"] = "گذرواژه جدید";
$definitions["New posts in the past week"] = "New posts in the past week";
$definitions["New username"] = "New username";
$definitions["Next Step"] = "Next Step";
$definitions["Next"] = "Next";
$definitions["No preview"] = "No preview";
$definitions["No"] = "No";
$definitions["Notifications"] = "اطلاعیه ها";
$definitions["Now"] = "هم اکنون";

$definitions["OK"] = "بسیار خوب";
$definitions["Online"] = "Online";
$definitions["online"] = "online";
$definitions["Open registration"] = "عضوگیری فعال";
$definitions["optional"] = "اختیاری";
$definitions["Order By:"] = ":مرتب سازی براساس ";
$definitions["Original Post"] = "مطلب اصلی";

$definitions["Page Not Found"] = "صفحه مورد نظر یافت نشد.";
$definitions["Password"] = "گذرواژه";
$definitions["PHP version"] = "PHP version";
$definitions["Plugins"] = "Plugins";
$definitions["Post a Reply"] = "ارسال پاسخ";
$definitions["Post count"] = "Post count";
$definitions["Posts"] = "مطلب ها";
$definitions["Preview"] = "پیشنمایش";
$definitions["Previous"] = "Previous";

$definitions["Quote"] = "نقل قول";
$definitions["quote"] = "quote";

$definitions["Read more"] = "Read more";
$definitions["Recent posts"] = "Recent posts";
$definitions["Recover Password"] = "بازیابی گذرواژه";
$definitions["Registered members"] = "Registered members";
$definitions["Registration"] = "عضوگیری";
$definitions["Remove avatar"] = "Remove avatar";
$definitions["Rename Member"] = "Rename Member";
$definitions["Reply"] = "Reply";
$definitions["Report a bug"] = "گذارش خطا";
$definitions["Require users to confirm their email address"] = "Require users to confirm their email address";
$definitions["Restore"] = "Restore";
$definitions["restore"] = "restore";
$definitions["Reset"] = "Reset";

$definitions["Save Changes"] = "ذخیره تغییرات";
$definitions["Save Draft"] = "ذخیره مطلب";
$definitions["Search conversations..."] = "جستجوی در گفتگوها ...";
$definitions["Search within this conversation..."] = "جستجو در این گفتگو ...";
$definitions["Search"] = "جستجو";
$definitions["See the private conversations I've had with %s"] = "دیدن گفتگوی خصوصیی که با %s داشته اید.";
$definitions["Set a New Password"] = "Set a New Password";
$definitions["Settings"] = "تنظیمات";
$definitions["Show an image in the header"] = "Show an image in the header";
$definitions["Show matching posts"] = "Show matching posts";
$definitions["Show the channel list by default"] = "Show the channel list by default";
$definitions["Show the conversation list by default"] = "Show the conversation list by default";
$definitions["Show the forum title in the header"] = "Show the forum title in the header";
$definitions["Sign Up"] = "عضویت";
$definitions["Skins"] = "Skins";
$definitions["Specify Setup Information"] = "Specify Setup Information";
$definitions["Star to receive notifications"] = "دنبال کنید تا مطلع شوید از تفییرات";
$definitions["Starred"] = "شما دنبال می کنید";
$definitions["Start"] = "Start";
$definitions["Start a conversation"] = "شروع یک گفتگوی جدید";
$definitions["Start a new conversation"] = "شروع یک گفتگوی جدید";
$definitions["Start a private conversation with %s"] = "شروع یک گفتگوی خصوصی با %s";
$definitions["Start Conversation"] = "شروع گفتگو";
$definitions["Starting a conversation"] = "Starting a conversation";
$definitions["Statistics"] = "آمار";
$definitions["statistic.conversation.plural"] = "%s گفتگوها";
$definitions["statistic.conversation"] = "%s conversation";
$definitions["statistic.member.plural"] = "%s کاربران";
$definitions["statistic.member"] = "%s کاربر";
$definitions["statistic.online.plural"] = "%s online";
$definitions["statistic.online"] = "%s online";
$definitions["statistic.post.plural"] = "%s مطلب ها";
$definitions["statistic.post"] = "%s مطلب";
$definitions["Sticky"] = "Sticky";
$definitions["Subscribe"] = "Subscribe";
$definitions["Subscribed"] = "Subscribed";
$definitions["Subscription"] = "Subscription";
$definitions["Suspend member"] = "Suspend member";
$definitions["Suspend members."] = "Suspend members.";
$definitions["Suspend"] = "Suspend";

$definitions["To get started with your forum, you might like to:"] = "To get started with your forum, you might like to:";

$definitions["Unhide"] = "Unhide";
$definitions["Uninstall"] = "Uninstall";
$definitions["Unlock"] = "Unlock";
$definitions["Unmute conversation"] = "Unmute conversation";
$definitions["Unstarred"] = "Not following";
$definitions["Unsticky"] = "Unsticky";
$definitions["Unsubscribe new users by default"] = "Unsubscribe new users by default";
$definitions["Unsubscribe"] = "Unsubscribe";
$definitions["Unsubscribed"] = "Unsubscribed";
$definitions["Unsuspend member"] = "Unsuspend member";
$definitions["Unsuspend"] = "Unsuspend";
$definitions["Until someone replies"] = "Until someone replies";
$definitions["Untitled conversation"] = "Untitled conversation";
$definitions["Upgrade esoTalk"] = "Upgrade esoTalk";
$definitions["Use a background image"] = "Use a background image";
$definitions["Use for mobile"] = "Use for mobile";
$definitions["Use friendly URLs"] = "Use friendly URLs";
$definitions["Used to verify your account and subscribe to conversations"] = "استفاده می شود برای اعتبارسنجی حساب شما و اشتراک در گفتگوها";
$definitions["Username"] = "نام کاربری";
$definitions["Username or Email"] = "نام کاربری یا پست الکترونیکی";

$definitions["View %s's profile"] = "View %s's profile";
$definitions["View all notifications"] = "View all notifications";
$definitions["View more"] = "View more";
$definitions["View your profile"] = "صفحه شخصی شما";
$definitions["View"] = "View";
$definitions["Viewing: %s"] = "Viewing: %s";
$definitions["viewingPosts"] = "<b>%s-%s</b> of %s posts";

$definitions["Warning"] = "Uh oh, something's not right!";
$definitions["Welcome to esoTalk!"] = "Welcome to esoTalk!";
$definitions["We've logged you in and taken you straight to your forum's administration panel. You're welcome."] = "We've logged you in and taken you straight to your forum's administration panel. You're welcome.";
$definitions["Write a reply..."] = "به این مطلب پاسخ دهید ...";

$definitions["Yes"] = "Yes";
$definitions["You can manage channel-specific permissions on the channels page."] = "You can manage channel-specific permissions on the channels page.";
$definitions["Your current password"] = "گذرواژه کنونی شما";


// Messages.
$definitions["message.404"] = "Oh dear - the page you requested could not be found! Try going back and clicking a different link. Or something else.";
$definitions["message.ajaxDisconnected"] = "Unable to communicate with the server. Wait a few seconds and <a href='javascript:jQuery.ETAjax.resumeAfterDisconnection()'>try again</a>, or <a href='' onclick='window.location.reload();return false'>refresh the page</a>.";
$definitions["message.ajaxRequestPending"] = "Hey! We're still processing some of your stuff! If you navigate away from this page you might lose any recent changes you've made, so wait a few seconds, ok?";
$definitions["message.avatarError"] = "There was a problem uploading your avatar. Make sure you're using a valid image type (like .jpg, .png, or .gif) and the file isn't really really huge.";
$definitions["message.cannotDeleteLastChannel"] = "Hey, wait up, you can't delete the last channel! Where would your conversations go? That's just silly.";
$definitions["message.changesSaved"] = "تغییراتی که اعمال کردید با موفقیت ذخیره سازی شد.";
$definitions["message.channelsHelp"] = "Channels are used to categorize conversations on your forum. You can create as many channels as needed, and rearrange/nest them by dragging and dropping below.";
$definitions["message.channelSlugTaken"] = "This slug is already in use by another channel.";
$definitions["message.confirmDelete"] = "Are you sure you want to delete this? Seriously, you won't be able to get it back.";
$definitions["message.confirmDiscardReply"] = "You have not saved your reply as a draft. Do you wish to discard it?";
$definitions["message.confirmEmail"] = "Before you can start using your newly-created account, you'll need to confirm your email address. Within the next minute or two you should receive an email from us containing a link to activate your account.";
$definitions["message.confirmLeave"] = "Woah, you haven't saved the stuff you are editing! If you leave this page, you'll lose any changes you've made. Is this ok?";
$definitions["message.connectionError"] = "esoTalk could not connect to the MySQL server. The error returned was:<br/>%s";
$definitions["message.conversationDeleted"] = "The conversation was deleted. Didn't that feel good?";
$definitions["message.conversationNotFound"] = "For some reason this conversation cannot be viewed. It may not exist, or you may not have permission to view it.";
$definitions["message.cookieAuthenticationTheft"] = "For security reasons, we couldn't log you in with your 'remember me' cookie. Please log in manually!";
$definitions["message.deleteChannelHelp"] = "Woah, hold up there! If you delete this channel, there'll be no way to get it back. Unless you build a time machine. But, uh, there'll be no <em>easy</em> way to get it back. All of the conversations in this channel can be moved to another of your choice.";
$definitions["message.emailConfirmed"] = "Cool! Your account has been validated and you can now start participating in conversations. Why not <a href='".URL("conversation/start")."'>start one</a> yourself?";
$definitions["message.emailDoesntExist"] = "That email address doesn't match any members in the database. Did you make a typo?";
$definitions["message.emailNotYetConfirmed"] = "You need to confirm your email before you can log in with it! If you didn't receive the confirmation email, <a href='%s'>click here to get it sent again</a>.";
$definitions["message.emailTaken"] = "شما نمی توانید این پست الکترونیکی را انتخاب کنید !";
$definitions["message.empty"] = "You must fill out this field.";
$definitions["message.emptyPost"] = "Yeah... uh, you should probably type something in your post.";
$definitions["message.emptyTitle"] = "The title of your conversation can't be blank. I mean, how can anyone click on a blank title? Think about it.";
$definitions["message.esoTalkAlreadyInstalled"] = "<strong>esoTalk is already installed.</strong><br/><small>To reinstall esoTalk, you must remove <strong>config/config.php</strong>.</small>";
$definitions["message.esoTalkUpdateAvailable"] = "A new version of esoTalk, %s, is now available.";
$definitions["message.esoTalkUpdateAvailableHelp"] = "It's recommended to always have the latest version of esoTalk installed to reduce security risk. And hey, there might be some cool new features!";
$definitions["message.esoTalkUpToDate"] = "Your version of esoTalk is up-to-date.";
$definitions["message.esoTalkUpToDateHelp"] = "I'm a poor college student who has spent many hundreds of hours developing esoTalk. If you like it, please consider <a href='%s' target='_blank'>donating</a>.";
$definitions["message.fatalError"] = "<p>esoTalk has encountered an nasty error which is making it impossible to do whatever it is that you're doing. But don't feel down - <strong>here are a few things you can try</strong>:</p>\n<ul>\n<li>Go outside, walk the dog, have a coffee... then <strong><a href='%1\$s'>try again</a></strong>!</li>\n<li>If you are the forum administrator, then you can <strong>get help on the <a href='%2\$s'>esoTalk website</a></strong>.</li>\n<li>Try hitting the computer - that sometimes works for me.</li>\n</ul>";
$definitions["message.fatalErrorInstaller"] = "<p>esoTalk has encountered an nasty error which is making it impossible to do whatever it is that you're doing. But don't feel down - <strong>here are a few things you can try</strong>:</p>\n<ul>\n<li><p><strong>Try again.</strong> Everyone makes mistakes - maybe the computer made one this time!</p></li>\n<li><p><strong>Go back and check your settings.</strong> In particular, make sure your database information is correct.</p></li>\n<li><p><strong>Get help.</strong> Go on the <a href='%s'>esoTalk support forum</a> and search to see if anyone else is having the same problem as you are. If not, start a new conversation about your problem, including the error details below.</p></li>\n</ul>";
$definitions["message.fatalErrorUpgrader"] = "<p>esoTalk has encountered an nasty error which is making it impossible to do whatever it is that you're doing. But don't feel down - <strong>here are a few things you can try</strong>:</p>\n<ul>\n<li><p><strong>Try again.</strong> Everyone makes mistakes - maybe the computer made one this time!</p></li>\n<li><p><strong>Get help.</strong> Go on the <a href='%s'>esoTalk support forum</a> and search to see if anyone else is having the same problem as you are. If not, start a new conversation about your problem, including the error details below.</p></li>\n</ul>";
$definitions["message.fileUploadFailed"] = "Something went wrong and the file you selected could not be uploaded. Perhaps it's too big, or in the wrong format?";
$definitions["message.fileUploadFailedMove"] = "The file you uploaded could not be copied to its destination. Please contact the forum administrator.";
$definitions["message.fileUploadNotImage"] = "The file you uploaded is not an image in an acceptable format.";
$definitions["message.fileUploadTooBig"] = "The file you selected could not be uploaded because it is too big.";
$definitions["message.forgotPasswordHelp"] = "گذرواژتون را فراموش کردید ؟ اشکال نداره معمولا این اتفاق می افتد . شما برای بازیابی آن پست الکترونیکی خود را وارد کنید تا دستورالعملی برای ایجاد یک گذرواژه ی جدید برای شما ارسال گردد.";
$definitions["message.fulltextKeywordWarning"] = "Note that keywords less than 4 characters in length, and common English words such as 'the' and 'for', aren't included in the search criteria.";
$definitions["message.gambitsHelp"] = "Gambits are phrases that describe what you are looking for. Click on a gambit to insert it into the search field. Double-click on a gambit to instantly search for it. Normal search keywords work too!";
$definitions["message.gdNotEnabledWarning"] = "The <strong>GD extension</strong> is not enabled.<br/><small>This is required to resize and save avatars. Get your host or administrator to install/enable it.</small>";
$definitions["message.greaterMySQLVersionRequired"] = "You must have <strong>MySQL 4 or greater</strong> installed and the <a href='http://php.net/manual/en/mysql.installation.php' target='_blank'>MySQL extension enabled in PHP</a>.<br/><small>Please install/upgrade both of these requirements or request that your host or administrator install them.</small>";
$definitions["message.greaterPHPVersionRequired"] = "Your server must have <strong>PHP 5.0.0 or greater</strong> installed to run esoTalk.<br/><small>Please upgrade your PHP installation or request that your host or administrator upgrade the server.</small>";
$definitions["message.incorrectLogin"] = "Your login details were incorrect.";
$definitions["message.incorrectPassword"] = "Your current password is incorrect.";
$definitions["message.installerAdminHelp"] = "esoTalk will use the following information to set up your administrator account on your forum.";
$definitions["message.installerFilesNotWritable"] = "esoTalk cannot write to the following files/folders: <strong>%s</strong>.<br/><small>To resolve this, you must navigate to these files/folders in your FTP client and <strong>chmod</strong> them to <strong>777</strong>.</small>";
$definitions["message.installerMySQLHelp"] = "esoTalk needs access to a MySQL database to store all your forum's data in, such as conversations and posts. If you're unsure of any of these details, you may need to ask your hosting provider.";
$definitions["message.installerWelcome"] = "<p>Welcome to the esoTalk installer! We need a few details from you so we can get your forum set up and ready to go.</p>\n<p>If you have any trouble, get help on the <a href='%s'>esoTalk support forum</a>.</p>";
$definitions["message.invalidChannel"] = "You selected an invalid channel!";
$definitions["message.invalidEmail"] = "Seems this email address isn't valid...";
$definitions["message.invalidUsername"] = "You must choose a username between 3 and 20 alphanumeric characters.";
$definitions["message.javascriptRequired"] = "This page requires JavaScript to function properly. Please enable it!";
$definitions["message.languageUninstalled"] = "The language was uninstalled.";
$definitions["message.locked"] = "Hm, looks like this conversation is <strong>locked</strong>, so you can't reply to it.";
$definitions["message.loginToParticipate"] = "To start conversations or reply to posts, please log in.";
$definitions["message.logInToReply"] = "<a href='%1\$s' class='link-login'>ورود</a> یا <a href='%2\$s' class='link-join'>عضویت</a> برای ارسال پاسخ لازم است.";
$definitions["message.logInToSeeAllConversations"] = "<a href='".URL("user/login")."' class='link-login'>وارد شوید !</a> شاید گفتگوها فقط برای کاربران انجمن فابل نمایش باشد .";
$definitions["message.memberNotFound"] = "Hm, there doesn't seem to be a member with that name.";
$definitions["message.memberNoPermissionView"] = "That member can't be added because they don't have permission to view the channel that this conversation is in.";
$definitions["message.nameTaken"] = "The name you have entered is taken or is a reserved word.";
$definitions["message.newSearchResults"] = "There has been new activity that has affected your search results. <a href='%s'>Refresh</a>";
$definitions["message.noActivity"] = "%s hasn't done anything on this forum yet!";
$definitions["message.noMembersOnline"] = "No members are currently online.";
$definitions["message.noNotifications"] = "You have no notifications.";
$definitions["message.noPermission"] = "You do not have permisssion to perform this action.";
$definitions["message.noPermissionToReplyInChannel"] = "You don't have permission to reply to conversations in this channel.";
$definitions["message.noPluginsInstalled"] = "No plugins are currently installed.";
$definitions["message.noSearchResults"] = "هیچ گفتگویی برای نمایش یافت نشد.";
$definitions["message.noSearchResultsMembers"] = "No members matching your search were found.";
$definitions["message.noSearchResultsPosts"] = "No posts matching your search were found.";
$definitions["message.noSkinsInstalled"] = "No skins are currently installed.";
$definitions["message.notWritable"] = "<code>%s</code> is not writeable. Try <code>chmod</code>ing it to <code>777</code>, or if it doesn't exist, <code>chmod</code> the folder it is contained within.";
$definitions["message.pageNotFound"] = "The page you're looking for could not be found.";
$definitions["message.passwordChanged"] = "Alright, your password has been changed. Now you can log in! Hey, try not to forget it again, OK?";
$definitions["message.passwordEmailSent"] = "Ok, we've sent you an email containing a link to reset your password. Check your spam folder if you don't receive it within the next minute or two. Yeah, some times we get put through to spam - can you believe it?!";
$definitions["message.passwordsDontMatch"] = "Your passwords do not match.";
$definitions["message.passwordTooShort"] = "Your password is too short.";
$definitions["message.pluginCannotBeEnabled"] = "The plugin <em>%s</em> cannot be enabled: %s";
$definitions["message.pluginDependencyNotMet"] = "To enable this plugin, you must have %s version %s installed and enabled.";
$definitions["message.pluginUninstalled"] = "The plugin was uninstalled.";
$definitions["message.postNotFound"] = "The post you're looking for could not be found.";
$definitions["message.postTooLong"] = "Your post is really, really long! Too long! The maximum number of characters allowed is %s. That's really long!";
$definitions["message.preInstallErrors"] = "The following errors were found with your esoTalk setup. They must be resolved before you can continue the installation.";
$definitions["message.preInstallWarnings"] = "The following errors were found with your esoTalk setup. You can continue the esoTalk install without resolving them, but some esoTalk functionality may be limited.";
$definitions["message.reduceNumberOfGambits"] = "Reduce the number of gambits or search keywords you're using to find a broader range of conversations.";
$definitions["message.registerGlobalsWarning"] = "PHP's <strong>register_globals</strong> setting is enabled.<br/><small>While esoTalk can run with this setting on, it is recommended that it be turned off to increase security and to prevent esoTalk from having problems.</small>";
$definitions["message.registrationClosed"] = "عضوگیری در این انجمن به حالت غیرفعال درآمده است، لطفا بعدا دوباره امتحان کنید.";
$definitions["message.removeDirectoryWarning"] = "Hey! Looks like you haven't deleted the <code>%s</code> directory like we told you to! You probably should, just to make sure those hackers can't do anything naughty.";
$definitions["message.safeModeWarning"] = "<strong>Safe mode</strong> is enabled.<br/><small>This could potentially cause problems with esoTalk, but you can still proceed if you cannot turn it off.</small>";
$definitions["message.searchAllConversations"] = "Try searching for this term across all conversations.";
$definitions["message.setNewPassword"] = "Alright! Now, what do you want your new password to be?";
$definitions["message.skinUninstalled"] = "The skin was uninstalled.";
$definitions["message.suspended"] = "Ouch! A forum moderator has <strong>suspended</strong> your account. It sucks, but until the suspension is lifted you won't be able to do much around here. Hey, screw them!";
$definitions["message.suspendMemberHelp"] = "Suspending %s will prevent them from replying to conversations, starting conversations, and viewing private conversations. They will effectively have the same permissions as a guest.";
$definitions["message.tablePrefixConflict"] = "The installer has detected that there is another installation of esoTalk in the same MySQL database with the same table prefix.<br/>To overwrite this installation of esoTalk, click 'Install My Forum' again. <strong>All data will be lost.</strong><br/>If you wish to create another esoTalk installation alongside the existing one, <strong>change the table prefix</strong>.";
$definitions["message.unsuspendMemberHelp"] = "Unsuspending %s will enable them to participate in conversations on this forum again.";
$definitions["message.upgradeSuccessful"] = "esoTalk was successfully upgraded.";
$definitions["message.waitToReply"] = "You must wait at least %s seconds between starting or replying to conversations. Take a deep breath and try again.";
$definitions["message.waitToSearch"] = "Woah, slow down! Looks like you're trying to perform a few too many searches. Wait %s seconds and try again.";


// Emails.
$definitions["email.confirmEmail.body"] = "<p>Someone (hopefully you!) has signed up to the forum '%1\$s' with this email address.</p><p>If this was you, simply visit the following link and your account will be activated:<br>%2\$s</p>";
$definitions["email.confirmEmail.subject"] = "%1\$s, please confirm your email address";
$definitions["email.footer"] = "<p>(If you don't want to receive any emails like this again, you can <a href='%s'>change your notification preferences</a>.)</p>";
$definitions["email.forgotPassword.body"] = "<p>Someone (hopefully you!) has submitted a forgotten password request for your account on the forum '%1\$s'. If you do not wish to change your password, just ignore this email and nothing will happen.</p><p>However, if you did forget your password and wish to set a new one, visit the following link:<br>%2\$s</p>";
$definitions["email.forgotPassword.subject"] = "Did you forget your password, %1\$s?";
$definitions["email.header"] = "<p>Hey %s!</p>";
$definitions["email.mention.body"] = "<p><strong>%1\$s</strong> mentioned you in a post in the conversation <strong>%2\$s</strong>.</p><hr>%3\$s<hr><p>To view the post in context, check out the following link:<br>%4\$s</p>";
$definitions["email.mention.subject"] = "%1\$s mentioned you in a post";
$definitions["email.privateAdd.body"] = "<p>شما به یک گفتگوی خصوصی با عنوان  <strong>%1\$s</strong>دعوت شده اید.</p><hr>%2\$s<hr><p>برای دیدن این گفتگو به لینکی که در ادامه آمده مرا جعه کنید.<br>%3\$s</p>";
$definitions["email.privateAdd.subject"] = "You have been added to a private conversation";
$definitions["email.post.body"] = "<p><strong>%1\$s</strong> has replied to a conversation which you followed: <strong>%2\$s</strong></p><hr>%3\$s<hr><p>To view the new activity, check out the following link:<br>%4\$s</p>";
$definitions["email.post.subject"] = "There is a new reply to '%1\$s'";


// Translating the gambit system can be quite complex, but we'll do our best to get you through it. :)
// Note: Don't use any html entities in these definitions, except for: &lt; &gt; &amp; &#39;

// Simple gambits
// These gambits are pretty much evaluated as-they-are.
// tag:, author:, contributor:, and quoted: are combined with a value after the colon (:).
// For example: tag:video games, author:myself
$definitions["gambit.author:"] = "author:";
$definitions["gambit.contributor:"] = "contributor:";
$definitions["gambit.member"] = "member";
$definitions["gambit.myself"] = "myself";
$definitions["gambit.draft"] = "draft";
$definitions["gambit.locked"] = "locked";
$definitions["gambit.order by newest"] = "order by newest";
$definitions["gambit.order by replies"] = "order by replies";
$definitions["gambit.private"] = "خصوصی";
$definitions["gambit.random"] = "random";
$definitions["gambit.reverse"] = "reverse";
$definitions["gambit.starred"] = "followed";
$definitions["gambit.muted"] = "muted";
$definitions["gambit.sticky"] = "sticky";
$definitions["gambit.unread"] = "unread";
$definitions["gambit.limit:"] = "limit:";

// Aliases
// These are gambits which tell the gambit system to use another gambit.
// In other words, when you type "active today", the gambit system interprets it as if you typed "active 1 day".
// The first of each pair, the alias, can be anything you want.
// The second, however, must fit with the regular expression pattern defined below (more on that later.)
$definitions["gambit.active today"] = "active today"; // what appears in the gambit cloud
$definitions["gambit.active 1 day"] = "active 1 day"; // what it actually evaluates to

$definitions["gambit.has replies"] = "has replies";
$definitions["gambit.has >0 replies"] = "has >0 replies";
$definitions["gambit.has >10 replies"] = "has >10 replies";

$definitions["gambit.has no replies"] = "has no replies";
$definitions["gambit.has 0 replies"] = "has 0 replies";

$definitions["gambit.dead"] = "dead";
$definitions["gambit.active >30 day"] = "active >30 day";

// Units of time
// These are used in the active gambit.
// ex. "[active] [>|<|>=|<=|last] 180 [second|minute|hour|day|week|month|year]"
$definitions["gambit.second"] = "ثانیه";
$definitions["gambit.minute"] = "دقیقه";
$definitions["gambit.hour"] = "ساعت";
$definitions["gambit.day"] = "روز";
$definitions["gambit.week"] = "هفته";
$definitions["gambit.month"] = "ماه";
$definitions["gambit.year"] = "سال";
$definitions["gambit.last"] = ""; // as in "active last 180 days"
$definitions["gambit.active"] = "آخیرن فعالیت"; // as in "active last 180 days"

// Now the hard bit. This is a regular expression to test for the "active" gambit.
// The group (?<a> ... ) is the comparison operator (>, <, >=, <=, or last).
// The group (?<b> ... ) is the number (ex. 24).
// The group (?<c> ... ) is the unit of time.
// The languages of "last" and the units of time are defined above.
// However, if you need to reorder the groups, do so carefully, and make sure spaces are written as " *".
$definitions["gambit.gambitActive"] = "/^{$definitions["gambit.active"]} *(?<a>>|<|>=|<=|{$definitions["gambit.last"]})? *(?<b>\d+) *(?<c>{$definitions["gambit.second"]}|{$definitions["gambit.minute"]}|{$definitions["gambit.hour"]}|{$definitions["gambit.day"]}|{$definitions["gambit.week"]}|{$definitions["gambit.month"]}|{$definitions["gambit.year"]})/"+" پیش ";

// These appear in the tag cloud. They must fit the regular expression pattern where the ? is a number.
// If the regular expression pattern has been reordered, these gambits must also be reordered (as well as the ones in aliases.)
$definitions["gambit.active last ? hours"] = "{$definitions["gambit.active"]} {$definitions["gambit.last"]} ? {$definitions["gambit.hour"]}s";
$definitions["gambit.active last ? days"] = "{$definitions["gambit.active"]} {$definitions["gambit.last"]} ? {$definitions["gambit.day"]}s";

// This is similar to the regular expression for the active gambit, but for the "has n reply(s)" gambit.
// Usually you just need to change the "has" and "repl".
$definitions["gambit.gambitHasNReplies"] = "/^has *(?<a>>|<|>=|<=)? *(?<b>\d+) *repl/";
