<?php

/**
 * @package AutoIndex
 *
 * @copyright Copyright (C) 2002-2005 Justin Hagstrom
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License (GPL)
 *
 * @link http://autoindex.sourceforge.net
 */

/*
   AutoIndex PHP Script is free software; you can redistribute it and/or modify
   it under the terms of the GNU General Public License as published by
   the Free Software Foundation; either version 2 of the License, or
   (at your option) any later version.

   AutoIndex PHP Script is distributed in the hope that it will be useful,
   but WITHOUT ANY WARRANTY; without even the implied warranty of
   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
   GNU General Public License for more details.

   You should have received a copy of the GNU General Public License
   along with this program; if not, write to the Free Software
   Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
*/

namespace Autoindex;

if (!defined('IN_AUTOINDEX') || !IN_AUTOINDEX)
{
	die();
}

/**
 * Given a filename extension, this will come up with the appropriate MIME-type.
 *
 * @author Justin Hagstrom <JustinHagstrom@yahoo.com>
 * @version 1.0.1 (February 09, 2005)
 * @package AutoIndex
 */
class MimeType
{
	/**
	 * @var string The filename's MIME-type
	 */
	private string $mime;
	
	/**
	 * @var string The default MIME-type to return
	 */
	private $default_type;
	
	/**
	 * Given a file extension, this will come up with the file's appropriate
	 * MIME-type.
	 *
	 * @param string $ext The file extension to find the MIME-type for
	 * @return string The appropriate MIME-type depending on the extension
	 */
	private function find_mime_type($ext)
	{
		static $mime_types = ['application/andrew-inset' => ['ez'], 'application/mac-binhex40' => ['hqx'], 'application/mac-compactpro' => ['cpt'], 'application/mathml+xml' => ['mathml'], 'application/msword' => ['doc'], 'application/octet-stream' => ['bin', 'dms', 'lha', 'lzh', 'exe', 'class', 'so', 'dll', 'dmg'], 'application/oda' => ['oda'], 'application/ogg' => ['ogg'], 'application/pdf' => ['pdf'], 'application/postscript' => ['ai', 'eps', 'ps'], 'application/rdf+xml' => ['rdf'], 'application/smil' => ['smi', 'smil'], 'application/srgs' => ['gram'], 'application/srgs+xml' => ['grxml'], 'application/vnd.mif' => ['mif'], 'application/vnd.mozilla.xul+xml' => ['xul'], 'application/vnd.ms-excel' => ['xls'], 'application/vnd.ms-powerpoint' => ['ppt'], 'application/vnd.wap.wbxml' => ['wbxml'], 'application/vnd.wap.wmlc' => ['wmlc'], 'application/vnd.wap.wmlscriptc' => ['wmlsc'], 'application/voicexml+xml' => ['vxml'], 'application/x-bcpio' => ['bcpio'], 'application/x-cdlink' => ['vcd'], 'application/x-chess-pgn' => ['pgn'], 'application/x-cpio' => ['cpio'], 'application/x-csh' => ['csh'], 'application/x-director' => ['dcr', 'dir', 'dxr'], 'application/x-dvi' => ['dvi'], 'application/x-futuresplash' => ['spl'], 'application/x-gtar' => ['gtar'], 'application/x-hdf' => ['hdf'], 'application/x-javascript' => ['js'], 'application/x-koan' => ['skp', 'skd', 'skt', 'skm'], 'application/x-latex' => ['latex'], 'application/x-netcdf' => ['nc', 'cdf'], 'application/x-sh' => ['sh'], 'application/x-shar' => ['shar'], 'application/x-shockwave-flash' => ['swf'], 'application/x-stuffit' => ['sit'], 'application/x-sv4cpio' => ['sv4cpio'], 'application/x-sv4crc' => ['sv4crc'], 'application/x-tar' => ['tar'], 'application/x-tcl' => ['tcl'], 'application/x-tex' => ['tex'], 'application/x-texinfo' => ['texinfo', 'texi'], 'application/x-troff' => ['t', 'tr', 'roff'], 'application/x-troff-man' => ['man'], 'application/x-troff-me' => ['me'], 'application/x-troff-ms' => ['ms'], 'application/x-ustar' => ['ustar'], 'application/x-wais-source' => ['src'], 'application/xhtml+xml' => ['xhtml', 'xht'], 'application/xslt+xml' => ['xslt'], 'application/xml' => ['xml', 'xsl'], 'application/xml-dtd' => ['dtd'], 'application/zip' => ['zip'], 'audio/basic' => ['au', 'snd'], 'audio/midi' => ['mid', 'midi', 'kar'], 'audio/mpeg' => ['mpga', 'mp2', 'mp3'], 'audio/x-aiff' => ['aif', 'aiff', 'aifc'], 'audio/x-mpegurl' => ['m3u'], 'audio/x-pn-realaudio' => ['ram', 'ra'], 'application/vnd.rn-realmedia' => ['rm'], 'audio/x-wav' => ['wav'], 'chemical/x-pdb' => ['pdb'], 'chemical/x-xyz' => ['xyz'], 'image/bmp' => ['bmp'], 'image/cgm' => ['cgm'], 'image/gif' => ['gif'], 'image/ief' => ['ief'], 'image/jpeg' => ['jpeg', 'jpg', 'jpe'], 'image/png' => ['png'], 'image/svg+xml' => ['svg'], 'image/tiff' => ['tiff', 'tif'], 'image/vnd.djvu' => ['djvu', 'djv'], 'image/vnd.wap.wbmp' => ['wbmp'], 'image/x-cmu-raster' => ['ras'], 'image/x-icon' => ['ico'], 'image/x-portable-anymap' => ['pnm'], 'image/x-portable-bitmap' => ['pbm'], 'image/x-portable-graymap' => ['pgm'], 'image/x-portable-pixmap' => ['ppm'], 'image/x-rgb' => ['rgb'], 'image/x-xbitmap' => ['xbm'], 'image/x-xpixmap' => ['xpm'], 'image/x-xwindowdump' => ['xwd'], 'model/iges' => ['igs', 'iges'], 'model/mesh' => ['msh', 'mesh', 'silo'], 'model/vrml' => ['wrl', 'vrml'], 'text/calendar' => ['ics', 'ifb'], 'text/css' => ['css'], 'text/html' => ['html', 'htm'], 'text/plain' => ['asc', 'txt'], 'text/richtext' => ['rtx'], 'text/rtf' => ['rtf'], 'text/sgml' => ['sgml', 'sgm'], 'text/tab-separated-values' => ['tsv'], 'text/vnd.wap.wml' => ['wml'], 'text/vnd.wap.wmlscript' => ['wmls'], 'text/x-setext' => ['etx'], 'video/mpeg' => ['mpeg', 'mpg', 'mpe'], 'video/quicktime' => ['qt', 'mov'], 'video/vnd.mpegurl' => ['mxu', 'm4u'], 'video/x-msvideo' => ['avi'], 'video/x-sgi-movie' => ['movie'], 'x-conference/x-cooltalk' => ['ice']];
		foreach ($mime_types as $mime_type => $exts)
		{
			if (in_array($ext, $exts))
			{
				return $mime_type;
			}
		}
		return $this -> default_type;
	}
	
	/**
	 * @param string $filename The filename to find the MIME-type for
	 * @param string $default_type The default MIME-type to return
	 */
	public function __construct($filename, $default_type = 'text/plain')
	{
		$this -> default_type = $default_type;
		$this -> mime = $this -> find_mime_type(FileItem::ext($filename));
	}
	
	/**
	 * @return string
	 */
	public function __toString()
	{
		return $this -> mime;
	}
}

?>