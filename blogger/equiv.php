<?php

$equiv = array('<$BlogPageTitle$>' => '<data:blog.pageTitle/>',
               '<$BlogMetaData$>' => "<b:include data='blog' name='all-head-content'/>",
               '<style type="text/css">' => '<b:skin><![CDATA[',
               '</style>' => ']]></b:skin>',
               '<$BlogURL$>' => '<data:blog.homepageUrl/>',
               '<$BlogDescription$>' => '<data:blog.description/>',
               '<Blogger>' => "<b:section class='posts' id='posts' showaddelement='yes' growth='vertical'>\n<b:widget id='PostWidget' locked='false' title='Posts' type='Blog'>\n<b:includable id='main'>\n<b:loop values='data:posts' var='post'>",
               '</Blogger>' => "</b:loop>\n</b:includable>\n</b:widget>\n</b:section>",
               '<$BlogItemNumber$>' => '<data:post.id/>',
               '<BlogDateHeader>' => "<b:if cond='data:post.dateHeader'>",
               '</BlogDateHeader>' => '</b:if>',
               '<$BlogDateHeaderDate$>' => '<data:post.dateHeader/>',
               '<$BlogItemPermalinkUrl$>' => '<data:post.url/>',
               '<BlogItemTitle>' => "<b:if cond='data:post.title'>",
               '</BlogItemTitle>' => '</b:if>',
               '<$BlogItemTitle$>' => '<data:post.title/>',
               '<$BlogItemBody$>' => '<data:post.body/>',
               '<$BlogItemAuthorURL$>' => '<data:blog.homepageUrl/>',
               '<$BlogItemAuthor$>' => '<data:post.author/>',
               '<$BlogItemDateTime$>' => '<data:post.timestamp/>',
               '<BlogItemCommentsEnabled>' => "<b:if cond='data:post.allowComments'>",
               '</BlogItemCommentsEnabled>' => '</b:if>',
               '<$BlogItemCommentCount$>' => '<data:post.numComments/>',
               '<$BlogItemControl$>' => "<span class='control'>\n<b:if cond='data:post.emailPostUrl'>\n<span class='item-action'>\n<a expr:href='data:post.emailPostUrl' title='Email Post'>\n<span class='email-post-icon'> </span>\n</a>\n</span>\n</b:if>\n<b:include data='post' name='postQuickEdit'/>\n</span>",
               '<$BlogEncoding$>' => '<data:blog.encoding/>',
               '<$BlogTitle$>' => '<data:blog.title/>',
               '<$BlogDescription$>' => '',
               '<$BlogItemAuthorNickname$>' => '<data:post.author/>',
               '<$BlogID$>' => '',
               '<$BlogItemUrl$>' => '<data:post.link/>',
               '<ItemPage>' => "<b:if cond='data:blog.pageType == \"item\"'>",
               '</ItemPage>' => '</b:if>',
               '<MainOrArchivePage>' => "<b:if cond='data:blog.pageType != \"item\"'>",
               '</MainOrArchivePage>' => '</b:if>',
               '<MainPage>' =>  "<b:if cond='data:blog.pageType == \"main\"'>",
               '</MainPage>' => '</b:if>',
               '<ArchivePage>' =>  "<b:if cond='data:blog.pageType == \"archive\"'>",
               '</ArchivePage>' => '</b:if>',
               '<$BlogItemCreate$>' => "<a expr:href='data:post.addCommentUrl'>Post a Comment</a>",
               '<BlogItemComments>' => "<b:loop values='data:post.comments' var='comment'>",
               '</BlogItemComments>' => '</b:loop>',
               '<$BlogCommentNumber$>' => '<data:comment.id/>',
               '<$BlogCommentDateTime$>' => '<data:comment.timestamp/>',
               '<$BlogCommentAuthor$>' => "<address style=\"display:inline;font-style:normal;\" class=\"author vcard\">\n<b:if cond='data:comment.authorUrl != \"\"'>\n<a class=\"url fn\" expr:href='data:comment.authorUrl'><data:comment.author/></a>\n<b:else/>\n<span class=\"fn\"><data:comment.author/></span>\n</b:if>\n</address>",
               '<$BlogCommentBody$>' => '<data:comment.body/>',
               '<$BlogCommentDeleteIcon$>' => "<b:include data='comment' name='commentDeleteIcon'/>",
               '<$BlogCommentPermalinkURL$>' => '#c<data:comment.id/>'
              );

?>