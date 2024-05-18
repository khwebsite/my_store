<div id="blog-section" class="ht-home-blogs slider-block">
    <div class="container">
        {if isset($xipbdp_title)}
            <div class="section-title">
                <h2 class="title">
                    <span>

                        {*                        <a href="{xipblog::XipBlogLink()}"></a>*}
                        {$xipbdp_title}
                    </span>
                </h2>
                {* {if isset($xipbdp_subtext)}
                <p class="page_subtitle">{$xipbdp_subtext}</p>
                {/if}*}
            </div>
        {/if}
        <div class="content-block row">
            <div class="blog-slider">
                {if (isset($xipblogposts) && !empty($xipblogposts))}
                    {foreach from=$xipblogposts item=xipblgpst}
                        <div class="item">
                            <div class="item-inner">
                                <div class="img-block">
                                    <a href="{$xipblgpst.link}">
                                        <div class="post_thumbnail">
                                            {if $xipblgpst.post_format == 'video'}
                                                {assign var="postvideos" value=','|explode:$xipblgpst.video}
                                                {if $postvideos|@count > 1 }
                                                    {include file="module:xipblog/views/templates/front/post-video.tpl" videos=$postvideos width='570' height="316" class="carousel"}
                                                {else}
                                                    {include file="module:xipblog/views/templates/front/post-video.tpl" videos=$postvideos width='570' height="316" class=""}
                                                {/if}
                                            {elseif $xipblgpst.post_format == 'audio'}
                                                {assign var="postaudio" value=','|explode:$xipblgpst.audio}
                                                {if $postaudio|@count > 1 }
                                                    {include file="module:xipblog/views/templates/front/post-audio.tpl" audios=$postaudio width='570' height="316" class="carousel"}
                                                {else}
                                                    {include file="module:xipblog/views/templates/front/post-audio.tpl" audios=$postaudio width='570' height="316" class=""}
                                                {/if}
                                            {elseif $xipblgpst.post_format == 'gallery'}
                                                {if $xipblgpst.gallery_lists|@count > 1 }
                                                    {include file="module:xipblog/views/templates/front/post-gallery.tpl" gallery=$xipblgpst.gallery_lists imagesize="home_default" class="carousel"}
                                                {else}
                                                    {include file="module:xipblog/views/templates/front/post-gallery.tpl" gallery=$xipblgpst.gallery_lists imagesize="home_default" class=""}
                                                {/if}
                                            {else}
                                                <img src="{$xipblgpst.post_img_home_default}"
                                                     alt="{$xipblgpst.post_title}">
                                            {/if}
                                        </div>
                                    </a>
                                </div>
                                <div class="text-block">
                                    <div class="post-info">
                                        <span class="blog-date">
                                            {*                                            <i class="fa fa-calendar" aria-hidden="true"></i>*}
                                            {$xipblgpst.post_date|date_format:"%B"}
                                            {$xipblgpst.post_date|date_format:"%d"},
                                            {$xipblgpst.post_date|date_format:"%Y"}
                                        </span>
                                    </div>
                                    <div class="post-content">
                                        <a href="{$xipblgpst.link}" class="blog-title">
                                            <span>
                                                {$xipblgpst.post_title}
                                            </span>
                                        </a>
                                        {*{if isset($xipblgpst.post_excerpt) && !empty($xipblgpst.post_excerpt)}
                                        <div class="blog-desc">
                                        {$xipblgpst.post_excerpt|truncate:100:' ...'|escape:'html':'UTF-8'}
                                        </div>
                                        {else}
                                        <div class="blog-desc">
                                        {$xipblgpst.post_content|truncate:100:' ...'|escape:'html':'UTF-8'}
                                        </div>
                                        {/if}*}
                                    </div>
                                    <div class="link-more">
                                        {*                                        <a href="{$xipblgpst.link}" class="blog-title">*}
                                        <span>
                                            {*                                                {l s='Read more' mod='xipblog'} <i class="fa fa-long-arrow-right"></i>*}
                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum has been.
                                        </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    {/foreach}
                {else}
                    <p>{l s='No Blog Post Found' mod='xipblog'}</p>
                {/if}
            </div>
        </div>
    </div>
</div>