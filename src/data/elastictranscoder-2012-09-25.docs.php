<?php return [
  'operations' => [
    'CancelJob' => '<p>The CancelJob operation cancels an unfinished job.</p> <note>You can only cancel a job that has a status of <code>Submitted</code>. To prevent a pipeline from starting to process a job while you\'re getting the job identifier, use <a>UpdatePipelineStatus</a> to temporarily pause the pipeline.</note>',
    'CreateJob' => '<p> When you create a job, Elastic Transcoder returns JSON data that includes the values that you specified plus information about the job that is created. </p> <p>If you have specified more than one output for your jobs (for example, one output for the Kindle Fire and another output for the Apple iPhone 4s], you currently must use the Elastic Transcoder API to list the jobs (as opposed to the AWS Console].</p>',
    'CreatePipeline' => '<p>The CreatePipeline operation creates a pipeline with settings that you specify.</p>',
    'CreatePreset' => '<p>The CreatePreset operation creates a preset with settings that you specify.</p> <important>Elastic Transcoder checks the CreatePreset settings to ensure that they meet Elastic Transcoder requirements and to determine whether they comply with H.264 standards. If your settings are not valid for Elastic Transcoder, Elastic Transcoder returns an HTTP 400 response (<code>ValidationException</code>] and does not create the preset. If the settings are valid for Elastic Transcoder but aren\'t strictly compliant with the H.264 standard, Elastic Transcoder creates the preset and returns a warning message in the response. This helps you determine whether your settings comply with the H.264 standard while giving you greater flexibility with respect to the video that Elastic Transcoder produces.</important> <p>Elastic Transcoder uses the H.264 video-compression format. For more information, see the International Telecommunication Union publication <i>Recommendation ITU-T H.264: Advanced video coding for generic audiovisual services</i>.</p>',
    'DeletePipeline' => '<p>The DeletePipeline operation removes a pipeline.</p> <p> You can only delete a pipeline that has never been used or that is not currently in use (doesn\'t contain any active jobs]. If the pipeline is currently in use, <code>DeletePipeline</code> returns an error. </p>',
    'DeletePreset' => '<p>The DeletePreset operation removes a preset that you\'ve added in an AWS region.</p> <note> <p>You can\'t delete the default presets that are included with Elastic Transcoder.</p> </note>',
    'ListJobsByPipeline' => '<p>The ListJobsByPipeline operation gets a list of the jobs currently in a pipeline.</p> <p>Elastic Transcoder returns all of the jobs currently in the specified pipeline. The response body contains one element for each job that satisfies the search criteria.</p>',
    'ListJobsByStatus' => '<p>The ListJobsByStatus operation gets a list of jobs that have a specified status. The response body contains one element for each job that satisfies the search criteria.</p>',
    'ListPipelines' => '<p>The ListPipelines operation gets a list of the pipelines associated with the current AWS account.</p>',
    'ListPresets' => '<p>The ListPresets operation gets a list of the default presets included with Elastic Transcoder and the presets that you\'ve added in an AWS region.</p>',
    'ReadJob' => '<p>The ReadJob operation returns detailed information about a job.</p>',
    'ReadPipeline' => '<p>The ReadPipeline operation gets detailed information about a pipeline.</p>',
    'ReadPreset' => '<p>The ReadPreset operation gets detailed information about a preset.</p>',
    'TestRole' => '<p>The TestRole operation tests the IAM role used to create the pipeline.</p> <p>The <code>TestRole</code> action lets you determine whether the IAM role you are using has sufficient permissions to let Elastic Transcoder perform tasks associated with the transcoding process. The action attempts to assume the specified IAM role, checks read access to the input and output buckets, and tries to send a test notification to Amazon SNS topics that you specify.</p>',
    'UpdatePipeline' => '<p> Use the <code>UpdatePipeline</code> operation to update settings for a pipeline. <important>When you change pipeline settings, your changes take effect immediately. Jobs that you have already submitted and that Elastic Transcoder has not started to process are affected in addition to jobs that you submit after you change settings. </important> </p>',
    'UpdatePipelineNotifications' => '<p>With the UpdatePipelineNotifications operation, you can update Amazon Simple Notification Service (Amazon SNS] notifications for a pipeline.</p> <p>When you update notifications for a pipeline, Elastic Transcoder returns the values that you specified in the request.</p>',
    'UpdatePipelineStatus' => '<p>The UpdatePipelineStatus operation pauses or reactivates a pipeline, so that the pipeline stops or restarts the processing of jobs.</p> <p>Changing the pipeline status is useful if you want to cancel one or more jobs. You can\'t cancel jobs after Elastic Transcoder has started processing them; if you pause the pipeline to which you submitted the jobs, you have more time to get the job IDs for the jobs that you want to cancel, and to send a <a>CancelJob</a> request. </p>',
  ],
  'service' => '<fullname>AWS Elastic Transcoder Service</fullname> <p>The AWS Elastic Transcoder Service.</p>',
  'shapes' => [
    'AccessControl' => [
      'base' => NULL,
      'refs' => [
        'AccessControls$member' => NULL,
      ],
    ],
    'AccessControls' => [
      'base' => NULL,
      'refs' => [
        'Permission$Access' => '<p> The permission that you want to give to the AWS user that is listed in Grantee. Valid values include: <ul> <li> <code>READ</code>: The grantee can read the thumbnails and metadata for thumbnails that Elastic Transcoder adds to the Amazon S3 bucket.</li> <li> <code>READ_ACP</code>: The grantee can read the object ACL for thumbnails that Elastic Transcoder adds to the Amazon S3 bucket.</li> <li> <code>WRITE_ACP</code>: The grantee can write the ACL for the thumbnails that Elastic Transcoder adds to the Amazon S3 bucket.</li> <li> <code>FULL_CONTROL</code>: The grantee has READ, READ_ACP, and WRITE_ACP permissions for the thumbnails that Elastic Transcoder adds to the Amazon S3 bucket.</li> </ul> </p>',
      ],
    ],
    'AccessDeniedException' => [
      'base' => '<p> General authentication failure. The request was not signed correctly. </p>',
      'refs' => [],
    ],
    'Artwork' => [
      'base' => '<p>The file to be used as album art. There can be multiple artworks associated with an audio file, to a maximum of 20.</p> <p>To remove artwork or leave the artwork empty, you can either set <code>Artwork</code> to null, or set the <code>Merge Policy</code> to "Replace" and use an empty <code>Artwork</code> array.</p> <p>To pass through existing artwork unchanged, set the <code>Merge Policy</code> to "Prepend", "Append", or "Fallback", and use an empty <code>Artwork</code> array.</p>',
      'refs' => [
        'Artworks$member' => NULL,
      ],
    ],
    'Artworks' => [
      'base' => NULL,
      'refs' => [
        'JobAlbumArt$Artwork' => '<p>The file to be used as album art. There can be multiple artworks associated with an audio file, to a maximum of 20. Valid formats are <code>.jpg</code> and <code>.png</code></p>',
      ],
    ],
    'Ascending' => [
      'base' => NULL,
      'refs' => [
        'ListJobsByPipelineRequest$Ascending' => '<p> To list jobs in chronological order by the date and time that they were submitted, enter <code>true</code>. To list jobs in reverse chronological order, enter <code>false</code>. </p>',
        'ListJobsByStatusRequest$Ascending' => '<p> To list jobs in chronological order by the date and time that they were submitted, enter <code>true</code>. To list jobs in reverse chronological order, enter <code>false</code>. </p>',
        'ListPipelinesRequest$Ascending' => '<p>To list pipelines in chronological order by the date and time that they were created, enter <code>true</code>. To list pipelines in reverse chronological order, enter <code>false</code>.</p>',
        'ListPresetsRequest$Ascending' => '<p>To list presets in chronological order by the date and time that they were created, enter <code>true</code>. To list presets in reverse chronological order, enter <code>false</code>.</p>',
      ],
    ],
    'AspectRatio' => [
      'base' => NULL,
      'refs' => [
        'JobInput$AspectRatio' => '<p> The aspect ratio of the input file. If you want Elastic Transcoder to automatically detect the aspect ratio of the input file, specify <code>auto</code>. If you want to specify the aspect ratio for the output file, enter one of the following values: </p> <p> <code>1:1</code>, <code>4:3</code>, <code>3:2</code>, <code>16:9</code> </p> <p> If you specify a value other than <code>auto</code>, Elastic Transcoder disables automatic detection of the aspect ratio. </p>',
        'Thumbnails$AspectRatio' => '<important> <p>To better control resolution and aspect ratio of thumbnails, we recommend that you use the values <code>MaxWidth</code>, <code>MaxHeight</code>, <code>SizingPolicy</code>, and <code>PaddingPolicy</code> instead of <code>Resolution</code> and <code>AspectRatio</code>. The two groups of settings are mutually exclusive. Do not use them together.</p> </important> <p>The aspect ratio of thumbnails. Valid values include:</p> <p><code>auto</code>, <code>1:1</code>, <code>4:3</code>, <code>3:2</code>, <code>16:9</code></p> <p>If you specify <code>auto</code>, Elastic Transcoder tries to preserve the aspect ratio of the video in the output file.</p>',
        'VideoParameters$AspectRatio' => '<important> <p>To better control resolution and aspect ratio of output videos, we recommend that you use the values <code>MaxWidth</code>, <code>MaxHeight</code>, <code>SizingPolicy</code>, <code>PaddingPolicy</code>, and <code>DisplayAspectRatio</code> instead of <code>Resolution</code> and <code>AspectRatio</code>. The two groups of settings are mutually exclusive. Do not use them together.</p> </important> <p>The display aspect ratio of the video in the output file. Valid values include:</p> <p><code>auto</code>, <code>1:1</code>, <code>4:3</code>, <code>3:2</code>, <code>16:9</code></p> <p>If you specify <code>auto</code>, Elastic Transcoder tries to preserve the aspect ratio of the input file.</p> <p>If you specify an aspect ratio for the output file that differs from aspect ratio of the input file, Elastic Transcoder adds pillarboxing (black bars on the sides] or letterboxing (black bars on the top and bottom] to maintain the aspect ratio of the active region of the video.</p>',
        'VideoParameters$DisplayAspectRatio' => '<p>The value that Elastic Transcoder adds to the metadata in the output file.</p>',
      ],
    ],
    'AudioBitRate' => [
      'base' => NULL,
      'refs' => [
        'AudioParameters$BitRate' => '<p>The bit rate of the audio stream in the output file, in kilobits/second. Enter an integer between 64 and 320, inclusive.</p>',
      ],
    ],
    'AudioChannels' => [
      'base' => NULL,
      'refs' => [
        'AudioParameters$Channels' => '<p>The number of audio channels in the output file. Valid values include:</p> <p><code>auto</code>, <code>0</code>, <code>1</code>, <code>2</code></p> <p>If you specify <code>auto</code>, Elastic Transcoder automatically detects the number of channels in the input file.</p>',
      ],
    ],
    'AudioCodec' => [
      'base' => NULL,
      'refs' => [
        'AudioParameters$Codec' => '<p>The audio codec for the output file. Valid values include <code>aac</code>, <code>mp3</code>, and <code>vorbis</code>.</p>',
      ],
    ],
    'AudioCodecOptions' => [
      'base' => '<p>Options associated with your audio codec.</p>',
      'refs' => [
        'AudioParameters$CodecOptions' => '<p>If you specified <code>AAC</code> for <code>Audio:Codec</code>, this is the <code>AAC</code> compression profile to use. Valid values include:</p> <p><code>auto</code>, <code>AAC-LC</code>, <code>HE-AAC</code>, <code>HE-AACv2</code></p> <p>If you specify <code>auto</code>, Elastic Transcoder chooses a profile based on the bit rate of the output file.</p>',
      ],
    ],
    'AudioCodecProfile' => [
      'base' => NULL,
      'refs' => [
        'AudioCodecOptions$Profile' => '<p>You can only choose an audio profile when you specify AAC for the value of Audio:Codec.</p> <p>Specify the AAC profile for the output file. Elastic Transcoder supports the following profiles:</p> <ul> <li> <code>auto</code>: If you specify <code>auto</code>, Elastic Transcoder will select the profile based on the bit rate selected for the output file.</li> <li> <code>AAC-LC</code>: The most common AAC profile. Use for bit rates larger than 64 kbps.</li> <li> <code>HE-AAC</code>: Not supported on some older players and devices. Use for bit rates between 40 and 80 kbps.</li> <li> <code>HE-AACv2</code>: Not supported on some players and devices. Use for bit rates less than 48 kbps.</li> </ul> <p>All outputs in a <code>Smooth</code> playlist must have the same value for <code>Profile</code>.</p> <note><p>If you created any presets before AAC profiles were added, Elastic Transcoder automatically updated your presets to use AAC-LC. You can change the value as required.</p></note>',
      ],
    ],
    'AudioParameters' => [
      'base' => '<p>Parameters required for transcoding audio.</p>',
      'refs' => [
        'CreatePresetRequest$Audio' => '<p>A section of the request body that specifies the audio parameters.</p>',
        'Preset$Audio' => '<p>A section of the response body that provides information about the audio preset values.</p>',
      ],
    ],
    'AudioSampleRate' => [
      'base' => NULL,
      'refs' => [
        'AudioParameters$SampleRate' => '<p>The sample rate of the audio stream in the output file, in Hertz. Valid values include:</p> <p><code>auto</code>, <code>22050</code>, <code>32000</code>, <code>44100</code>, <code>48000</code>, <code>96000</code></p> <p>If you specify <code>auto</code>, Elastic Transcoder automatically detects the sample rate.</p>',
      ],
    ],
    'Base64EncodedString' => [
      'base' => NULL,
      'refs' => [
        'Encryption$Key' => '<p>The data encryption key that you want Elastic Transcoder to use to encrypt your output file, or that was used to encrypt your input file. The key must be base64-encoded and it must be one of the following bit lengths before being base64-encoded:</p> <p><code>128</code>, <code>192</code>, or <code>256</code>. </p> <p>The key must also be encrypted by using the Amazon Key Management Service.</p>',
        'Encryption$KeyMd5' => '<p>The MD5 digest of the key that you used to encrypt your input file, or that you want Elastic Transcoder to use to encrypt your output file. Elastic Transcoder uses the key digest as a checksum to make sure your key was not corrupted in transit. The key MD5 must be base64-encoded, and it must be exactly 16 bytes long before being base64-encoded.</p>',
        'HlsContentProtection$Key' => '<p>If you want Elastic Transcoder to generate a key for you, leave this field blank.</p> <p>If you choose to supply your own key, you must encrypt the key by using AWS KMS. The key must be base64-encoded, and it must be one of the following bit lengths before being base64-encoded:</p> <p><code>128</code>, <code>192</code>, or <code>256</code>. </p>',
        'HlsContentProtection$KeyMd5' => '<p>If Elastic Transcoder is generating your key for you, you must leave this field blank.</p> <p>The MD5 digest of the key that you want Elastic Transcoder to use to encrypt your output file, and that you want Elastic Transcoder to use as a checksum to make sure your key was not corrupted in transit. The key MD5 must be base64-encoded, and it must be exactly 16 bytes before being base64- encoded.</p>',
      ],
    ],
    'BucketName' => [
      'base' => NULL,
      'refs' => [
        'CreatePipelineRequest$InputBucket' => '<p>The Amazon S3 bucket in which you saved the media files that you want to transcode.</p>',
        'CreatePipelineRequest$OutputBucket' => '<p>The Amazon S3 bucket in which you want Elastic Transcoder to save the transcoded files. (Use this, or use ContentConfig:Bucket plus ThumbnailConfig:Bucket.]</p> <p>Specify this value when all of the following are true: <ul> <li>You want to save transcoded files, thumbnails (if any], and playlists (if any] together in one bucket.</li> <li>You do not want to specify the users or groups who have access to the transcoded files, thumbnails, and playlists.</li> <li>You do not want to specify the permissions that Elastic Transcoder grants to the files. <important>When Elastic Transcoder saves files in <code>OutputBucket</code>, it grants full control over the files only to the AWS account that owns the role that is specified by <code>Role</code>.</important> </li> <li>You want to associate the transcoded files and thumbnails with the Amazon S3 Standard storage class.</li> </ul></p> <p>If you want to save transcoded files and playlists in one bucket and thumbnails in another bucket, specify which users can access the transcoded files or the permissions the users have, or change the Amazon S3 storage class, omit <code>OutputBucket</code> and specify values for <code>ContentConfig</code> and <code>ThumbnailConfig</code> instead.</p>',
        'Pipeline$InputBucket' => '<p>The Amazon S3 bucket from which Elastic Transcoder gets media files for transcoding and the graphics files, if any, that you want to use for watermarks.</p>',
        'Pipeline$OutputBucket' => '<p>The Amazon S3 bucket in which you want Elastic Transcoder to save transcoded files, thumbnails, and playlists. Either you specify this value, or you specify both <code>ContentConfig</code> and <code>ThumbnailConfig</code>.</p>',
        'PipelineOutputConfig$Bucket' => '<p> The Amazon S3 bucket in which you want Elastic Transcoder to save the transcoded files. Specify this value when all of the following are true: <ul> <li>You want to save transcoded files, thumbnails (if any], and playlists (if any] together in one bucket.</li> <li>You do not want to specify the users or groups who have access to the transcoded files, thumbnails, and playlists.</li> <li>You do not want to specify the permissions that Elastic Transcoder grants to the files. </li> <li>You want to associate the transcoded files and thumbnails with the Amazon S3 Standard storage class.</li> </ul> If you want to save transcoded files and playlists in one bucket and thumbnails in another bucket, specify which users can access the transcoded files or the permissions the users have, or change the Amazon S3 storage class, omit OutputBucket and specify values for <code>ContentConfig</code> and <code>ThumbnailConfig</code> instead. </p>',
        'TestRoleRequest$InputBucket' => '<p>The Amazon S3 bucket that contains media files to be transcoded. The action attempts to read from this bucket.</p>',
        'TestRoleRequest$OutputBucket' => '<p>The Amazon S3 bucket that Elastic Transcoder will write transcoded media files to. The action attempts to read from this bucket.</p>',
        'UpdatePipelineRequest$InputBucket' => '<p>The Amazon S3 bucket in which you saved the media files that you want to transcode and the graphics that you want to use as watermarks.</p>',
      ],
    ],
    'CancelJobRequest' => [
      'base' => '<p>The <code>CancelJobRequest</code> structure.</p>',
      'refs' => [],
    ],
    'CancelJobResponse' => [
      'base' => '<p>The response body contains a JSON object. If the job is successfully canceled, the value of <code>Success</code> is <code>true</code>.</p>',
      'refs' => [],
    ],
    'CaptionFormat' => [
      'base' => '<p>The file format of the output captions. If you leave this value blank, Elastic Transcoder returns an error.</p>',
      'refs' => [
        'CaptionFormats$member' => NULL,
      ],
    ],
    'CaptionFormatFormat' => [
      'base' => NULL,
      'refs' => [
        'CaptionFormat$Format' => '<p>The format you specify determines whether Elastic Transcoder generates an embedded or sidecar caption for this output.</p> <ul> <li> <p><b>Valid Embedded Caption Formats:</b></p> <ul> <li><p><b>For MP3</b>: None</p></li> <li><p><b>For MP4</b>: mov-text</p></li> <li><p><b>For MPEG-TS</b>: None</p></li> <li><p><b>For ogg</b>: None</p></li> <li><p><b>For webm</b>: None</p></li> </ul> </li> <li> <p><b>Valid Sidecar Caption Formats:</b> Elastic Transcoder supports dfxp (first div element only], scc, srt, and webvtt. If you want ttml or smpte-tt compatible captions, specify dfxp as your output format.</p> <ul> <li><p><b>For FMP4</b>: dfxp</p></li> <li><p><b>Non-FMP4 outputs</b>: All sidecar types</p></li> </ul> <p><code>fmp4</code> captions have an extension of <code>.ismt</code></p> </li> </ul>',
      ],
    ],
    'CaptionFormatPattern' => [
      'base' => NULL,
      'refs' => [
        'CaptionFormat$Pattern' => '<p>The prefix for caption filenames, in the form <i>description</i>-<code>{language}</code>, where:</p> <ul> <li> <i>description</i> is a description of the video.</li> <li> <code>{language}</code> is a literal value that Elastic Transcoder replaces with the two- or three-letter code for the language of the caption in the output file names.</li> </ul> <p>If you don\'t include <code>{language}</code> in the file name pattern, Elastic Transcoder automatically appends "<code>{language}</code>" to the value that you specify for the description. In addition, Elastic Transcoder automatically appends the count to the end of the segment files.</p> <p>For example, suppose you\'re transcoding into srt format. When you enter "Sydney-{language}-sunrise", and the language of the captions is English (en], the name of the first caption file will be Sydney-en-sunrise00000.srt.</p>',
      ],
    ],
    'CaptionFormats' => [
      'base' => NULL,
      'refs' => [
        'Captions$CaptionFormats' => '<p>The array of file formats for the output captions. If you leave this value blank, Elastic Transcoder returns an error.</p>',
      ],
    ],
    'CaptionMergePolicy' => [
      'base' => NULL,
      'refs' => [
        'Captions$MergePolicy' => '<p>A policy that determines how Elastic Transcoder handles the existence of multiple captions.</p> <ul> <li><p><b>MergeOverride:</b> Elastic Transcoder transcodes both embedded and sidecar captions into outputs. If captions for a language are embedded in the input file and also appear in a sidecar file, Elastic Transcoder uses the sidecar captions and ignores the embedded captions for that language.</p></li> <li><p><b>MergeRetain:</b> Elastic Transcoder transcodes both embedded and sidecar captions into outputs. If captions for a language are embedded in the input file and also appear in a sidecar file, Elastic Transcoder uses the embedded captions and ignores the sidecar captions for that language. If <code>CaptionSources</code> is empty, Elastic Transcoder omits all sidecar captions from the output files.</p></li> <li><p><b>Override:</b> Elastic Transcoder transcodes only the sidecar captions that you specify in <code>CaptionSources</code>.</p></li> </ul> <p><code>MergePolicy</code> cannot be null.</p>',
      ],
    ],
    'CaptionSource' => [
      'base' => '<p>A source file for the input sidecar captions used during the transcoding process.</p>',
      'refs' => [
        'CaptionSources$member' => NULL,
      ],
    ],
    'CaptionSources' => [
      'base' => NULL,
      'refs' => [
        'Captions$CaptionSources' => '<p>Source files for the input sidecar captions used during the transcoding process. To omit all sidecar captions, leave <code>CaptionSources</code> blank.</p>',
      ],
    ],
    'Captions' => [
      'base' => '<p>The captions to be created, if any.</p>',
      'refs' => [
        'CreateJobOutput$Captions' => '<p>You can configure Elastic Transcoder to transcode captions, or subtitles, from one format to another. All captions must be in UTF-8. Elastic Transcoder supports two types of captions:</p> <ul> <li> <p><b>Embedded:</b> Embedded captions are included in the same file as the audio and video. Elastic Transcoder supports only one embedded caption per language, to a maximum of 300 embedded captions per file.</p> <p>Valid input values include: <code>CEA-608 (EIA-608</code>, first non-empty channel only], <code>CEA-708 (EIA-708</code>, first non-empty channel only], and <code>mov-text</code></p> <p>Valid outputs include: <code>mov-text</code></p> <p>Elastic Transcoder supports a maximum of one embedded format per output.</p> </li> <li> <p><b>Sidecar:</b> Sidecar captions are kept in a separate metadata file from the audio and video data. Sidecar captions require a player that is capable of understanding the relationship between the video file and the sidecar file. Elastic Transcoder supports only one sidecar caption per language, to a maximum of 20 sidecar captions per file.</p> <p>Valid input values include: <code>dfxp</code> (first div element only], <code>ebu-tt</code>, <code>scc</code>, <code>smpt</code>, <code>srt</code>, <code>ttml</code> (first div element only], and <code>webvtt</code></p> <p>Valid outputs include: <code>dfxp</code> (first div element only], <code>scc</code>, <code>srt</code>, and <code>webvtt</code>.</p> </li> </ul> <p> If you want ttml or smpte-tt compatible captions, specify dfxp as your output format.</p> <p>Elastic Transcoder does not support OCR (Optical Character Recognition], does not accept pictures as a valid input for captions, and is not available for audio-only transcoding. Elastic Transcoder does not preserve text formatting (for example, italics] during the transcoding process.</p> <p>To remove captions or leave the captions empty, set <code>Captions</code> to null. To pass through existing captions unchanged, set the <code>MergePolicy</code> to <code>MergeRetain</code>, and pass in a null <code>CaptionSources</code> array.</p> <p>For more information on embedded files, see the Subtitles Wikipedia page.</p> <p>For more information on sidecar files, see the Extensible Metadata Platform and Sidecar file Wikipedia pages.</p>',
        'JobOutput$Captions' => '<p>You can configure Elastic Transcoder to transcode captions, or subtitles, from one format to another. All captions must be in UTF-8. Elastic Transcoder supports two types of captions:</p> <ul> <li> <p><b>Embedded:</b> Embedded captions are included in the same file as the audio and video. Elastic Transcoder supports only one embedded caption per language, to a maximum of 300 embedded captions per file.</p> <p>Valid input values include: <code>CEA-608 (EIA-608</code>, first non-empty channel only], <code>CEA-708 (EIA-708</code>, first non-empty channel only], and <code>mov-text</code></p> <p>Valid outputs include: <code>mov-text</code></p> <p>Elastic Transcoder supports a maximum of one embedded format per output.</p> </li> <li> <p><b>Sidecar:</b> Sidecar captions are kept in a separate metadata file from the audio and video data. Sidecar captions require a player that is capable of understanding the relationship between the video file and the sidecar file. Elastic Transcoder supports only one sidecar caption per language, to a maximum of 20 sidecar captions per file.</p> <p>Valid input values include: <code>dfxp</code> (first div element only], <code>ebu-tt</code>, <code>scc</code>, <code>smpt</code>, <code>srt</code>, <code>ttml</code> (first div element only], and <code>webvtt</code></p> <p>Valid outputs include: <code>dfxp</code> (first div element only], <code>scc</code>, <code>srt</code>, and <code>webvtt</code>.</p> </li> </ul> <p> If you want ttml or smpte-tt compatible captions, specify dfxp as your output format.</p> <p>Elastic Transcoder does not support OCR (Optical Character Recognition], does not accept pictures as a valid input for captions, and is not available for audio-only transcoding. Elastic Transcoder does not preserve text formatting (for example, italics] during the transcoding process.</p> <p>To remove captions or leave the captions empty, set <code>Captions</code> to null. To pass through existing captions unchanged, set the <code>MergePolicy</code> to <code>MergeRetain</code>, and pass in a null <code>CaptionSources</code> array.</p> <p>For more information on embedded files, see the Subtitles Wikipedia page.</p> <p>For more information on sidecar files, see the Extensible Metadata Platform and Sidecar file Wikipedia pages.</p>',
      ],
    ],
    'Clip' => [
      'base' => '<p>Settings for one clip in a composition. All jobs in a playlist must have the same clip settings.</p>',
      'refs' => [
        'Composition$member' => NULL,
      ],
    ],
    'CodecOption' => [
      'base' => NULL,
      'refs' => [
        'CodecOptions$key' => NULL,
        'CodecOptions$value' => NULL,
      ],
    ],
    'CodecOptions' => [
      'base' => NULL,
      'refs' => [
        'VideoParameters$CodecOptions' => '<p> <b>Profile</b> </p> <p>The H.264 profile that you want to use for the output file. Elastic Transcoder supports the following profiles:</p> <ul> <li> <code>baseline</code>: The profile most commonly used for videoconferencing and for mobile applications.</li> <li> <code>main</code>: The profile used for standard-definition digital TV broadcasts.</li> <li> <code>high</code>: The profile used for high-definition digital TV broadcasts and for Blu-ray discs.</li> </ul> <p> <b>Level (H.264 Only]</b> </p> <p>The H.264 level that you want to use for the output file. Elastic Transcoder supports the following levels:</p> <p><code>1</code>, <code>1b</code>, <code>1.1</code>, <code>1.2</code>, <code>1.3</code>, <code>2</code>, <code>2.1</code>, <code>2.2</code>, <code>3</code>, <code>3.1</code>, <code>3.2</code>, <code>4</code>, <code>4.1</code></p> <p> <b>MaxReferenceFrames (H.264 Only]</b> </p> <p>Applicable only when the value of Video:Codec is H.264. The maximum number of previously decoded frames to use as a reference for decoding future frames. Valid values are integers 0 through 16, but we recommend that you not use a value greater than the following:</p> <p> <code>Min(Floor(Maximum decoded picture buffer in macroblocks * 256 / (Width in pixels * Height in pixels]], 16]</code> </p> <p>where <i>Width in pixels</i> and <i>Height in pixels</i> represent either MaxWidth and MaxHeight, or Resolution. <i>Maximum decoded picture buffer in macroblocks</i> depends on the value of the <code>Level</code> object. See the list below. (A macroblock is a block of pixels measuring 16x16.] </p> <ul> <li>1 - 396</li> <li>1b - 396</li> <li>1.1 - 900</li> <li>1.2 - 2376</li> <li>1.3 - 2376</li> <li>2 - 2376</li> <li>2.1 - 4752</li> <li>2.2 - 8100</li> <li>3 - 8100</li> <li>3.1 - 18000</li> <li>3.2 - 20480</li> <li>4 - 32768</li> <li>4.1 - 32768</li> </ul> <p> <b>MaxBitRate</b> </p> <p>The maximum number of bits per second in a video buffer; the size of the buffer is specified by <code>BufferSize</code>. Specify a value between 16 and 62,500. You can reduce the bandwidth required to stream a video by reducing the maximum bit rate, but this also reduces the quality of the video.</p> <p> <b>BufferSize</b> </p> <p>The maximum number of bits in any x seconds of the output video. This window is commonly 10 seconds, the standard segment duration when you\'re using FMP4 or MPEG-TS for the container type of the output video. Specify an integer greater than 0. If you specify <code>MaxBitRate</code> and omit <code>BufferSize</code>, Elastic Transcoder sets <code>BufferSize</code> to 10 times the value of <code>MaxBitRate</code>.</p>',
      ],
    ],
    'Composition' => [
      'base' => NULL,
      'refs' => [
        'CreateJobOutput$Composition' => '<p>You can create an output file that contains an excerpt from the input file. This excerpt, called a clip, can come from the beginning, middle, or end of the file. The Composition object contains settings for the clips that make up an output file. For the current release, you can only specify settings for a single clip per output file. The Composition object cannot be null.</p>',
        'JobOutput$Composition' => '<p>You can create an output file that contains an excerpt from the input file. This excerpt, called a clip, can come from the beginning, middle, or end of the file. The Composition object contains settings for the clips that make up an output file. For the current release, you can only specify settings for a single clip per output file. The Composition object cannot be null.</p>',
      ],
    ],
    'CreateJobOutput' => [
      'base' => '<p>The <code>CreateJobOutput</code> structure.</p>',
      'refs' => [
        'CreateJobOutputs$member' => NULL,
        'CreateJobRequest$Output' => NULL,
      ],
    ],
    'CreateJobOutputs' => [
      'base' => NULL,
      'refs' => [
        'CreateJobRequest$Outputs' => '<p> A section of the request body that provides information about the transcoded (target] files. We recommend that you use the <code>Outputs</code> syntax instead of the <code>Output</code> syntax. </p>',
      ],
    ],
    'CreateJobPlaylist' => [
      'base' => '<p>Information about the master playlist.</p>',
      'refs' => [
        'CreateJobPlaylists$member' => NULL,
      ],
    ],
    'CreateJobPlaylists' => [
      'base' => NULL,
      'refs' => [
        'CreateJobRequest$Playlists' => '<p>If you specify a preset in <code>PresetId</code> for which the value of <code>Container</code> is fmp4 (Fragmented MP4] or ts (MPEG-TS], Playlists contains information about the master playlists that you want Elastic Transcoder to create.</p> <p>The maximum number of master playlists in a job is 30.</p>',
      ],
    ],
    'CreateJobRequest' => [
      'base' => '<p>The <code>CreateJobRequest</code> structure.</p>',
      'refs' => [],
    ],
    'CreateJobResponse' => [
      'base' => '<p>The CreateJobResponse structure.</p>',
      'refs' => [],
    ],
    'CreatePipelineRequest' => [
      'base' => '<p>The <code>CreatePipelineRequest</code> structure.</p>',
      'refs' => [],
    ],
    'CreatePipelineResponse' => [
      'base' => '<p>When you create a pipeline, Elastic Transcoder returns the values that you specified in the request.</p>',
      'refs' => [],
    ],
    'CreatePresetRequest' => [
      'base' => '<p>The <code>CreatePresetRequest</code> structure.</p>',
      'refs' => [],
    ],
    'CreatePresetResponse' => [
      'base' => '<p>The <code>CreatePresetResponse</code> structure.</p>',
      'refs' => [],
    ],
    'DeletePipelineRequest' => [
      'base' => '<p>The <code>DeletePipelineRequest</code> structure.</p>',
      'refs' => [],
    ],
    'DeletePipelineResponse' => [
      'base' => '<p>The <code>DeletePipelineResponse</code> structure.</p>',
      'refs' => [],
    ],
    'DeletePresetRequest' => [
      'base' => '<p>The <code>DeletePresetRequest</code> structure.</p>',
      'refs' => [],
    ],
    'DeletePresetResponse' => [
      'base' => '<p>The <code>DeletePresetResponse</code> structure.</p>',
      'refs' => [],
    ],
    'Description' => [
      'base' => NULL,
      'refs' => [
        'CreatePresetRequest$Description' => '<p>A description of the preset.</p>',
        'JobOutput$StatusDetail' => '<p>Information that further explains <code>Status</code>.</p>',
        'Playlist$StatusDetail' => '<p>Information that further explains the status.</p>',
        'Preset$Description' => '<p>A description of the preset.</p>',
      ],
    ],
    'Digits' => [
      'base' => NULL,
      'refs' => [
        'Thumbnails$Interval' => '<p>The approximate number of seconds between thumbnails. Specify an integer value.</p>',
      ],
    ],
    'DigitsOrAuto' => [
      'base' => NULL,
      'refs' => [
        'Artwork$MaxWidth' => '<p>The maximum width of the output album art in pixels. If you specify <code>auto</code>, Elastic Transcoder uses 600 as the default value. If you specify a numeric value, enter an even integer between 32 and 4096, inclusive.</p>',
        'Artwork$MaxHeight' => '<p>The maximum height of the output album art in pixels. If you specify <code>auto</code>, Elastic Transcoder uses 600 as the default value. If you specify a numeric value, enter an even integer between 32 and 3072, inclusive.</p>',
        'Thumbnails$MaxWidth' => '<p>The maximum width of thumbnails in pixels. If you specify auto, Elastic Transcoder uses 1920 (Full HD] as the default value. If you specify a numeric value, enter an even integer between 32 and 4096. </p>',
        'Thumbnails$MaxHeight' => '<p>The maximum height of thumbnails in pixels. If you specify auto, Elastic Transcoder uses 1080 (Full HD] as the default value. If you specify a numeric value, enter an even integer between 32 and 3072. </p>',
        'VideoParameters$MaxWidth' => '<p> The maximum width of the output video in pixels. If you specify <code>auto</code>, Elastic Transcoder uses 1920 (Full HD] as the default value. If you specify a numeric value, enter an even integer between 128 and 4096. </p>',
        'VideoParameters$MaxHeight' => '<p>The maximum height of the output video in pixels. If you specify <code>auto</code>, Elastic Transcoder uses 1080 (Full HD] as the default value. If you specify a numeric value, enter an even integer between 96 and 3072.</p>',
      ],
    ],
    'Encryption' => [
      'base' => '<p>The encryption settings, if any, that are used for decrypting your input files or encrypting your output files. If your input file is encrypted, you must specify the mode that Elastic Transcoder will use to decrypt your file, otherwise you must specify the mode you want Elastic Transcoder to use to encrypt your output files.</p>',
      'refs' => [
        'Artwork$Encryption' => '<p>The encryption settings, if any, that you want Elastic Transcoder to apply to your artwork.</p>',
        'CaptionFormat$Encryption' => '<p>The encryption settings, if any, that you want Elastic Transcoder to apply to your caption formats.</p>',
        'CaptionSource$Encryption' => '<p>The encryption settings, if any, that you want Elastic Transcoder to apply to your caption sources.</p>',
        'CreateJobOutput$ThumbnailEncryption' => '<p>The encryption settings, if any, that you want Elastic Transcoder to apply to your thumbnail.</p>',
        'CreateJobOutput$Encryption' => '<p>You can specify encryption settings for any output files that you want to use for a transcoding job. This includes the output file and any watermarks, thumbnails, album art, or captions that you want to use. You must specify encryption settings for each file individually.</p>',
        'JobInput$Encryption' => '<p>The encryption settings, if any, that are used for decrypting your input files. If your input file is encrypted, you must specify the mode that Elastic Transcoder will use to decrypt your file.</p>',
        'JobOutput$ThumbnailEncryption' => '<p>The encryption settings, if any, that you want Elastic Transcoder to apply to your thumbnail.</p>',
        'JobOutput$Encryption' => '<p>The encryption settings, if any, that you want Elastic Transcoder to apply to your output files. If you choose to use encryption, you must specify a mode to use. If you choose not to use encryption, Elastic Transcoder will write an unencrypted file to your Amazon S3 bucket.</p>',
        'JobWatermark$Encryption' => '<p>The encryption settings, if any, that you want Elastic Transcoder to apply to your watermarks.</p>',
      ],
    ],
    'EncryptionMode' => [
      'base' => NULL,
      'refs' => [
        'Encryption$Mode' => '<p>The specific server-side encryption mode that you want Elastic Transcoder to use when decrypting your input files or encrypting your output files. Elastic Transcoder supports the following options:</p> <ul> <li><p><b>S3:</b> Amazon S3 creates and manages the keys used for encrypting your files.</p></li> <li><p><b>S3-AWS-KMS:</b> Amazon S3 calls the Amazon Key Management Service, which creates and manages the keys that are used for encrypting your files. If you specify <code>S3-AWS-KMS</code> and you don\'t want to use the default key, you must add the AWS-KMS key that you want to use to your pipeline.</p></li> <li><p><b>AES-CBC-PKCS7:</b> A padded cipher-block mode of operation originally used for HLS files.</p></li> <li><p><b>AES-CTR:</b> AES Counter Mode.</p></li> <li><p><b>AES-GCM:</b> AES Galois Counter Mode, a mode of operation that is an authenticated encryption format, meaning that a file, key, or initialization vector that has been tampered with will fail the decryption process.</p></li> </ul> <p>For all three AES options, you must provide the following settings, which must be base64-encoded:</p> <ul> <li><p><b>Key</b></p></li> <li><p><b>Key MD5</b></p></li> <li><p><b>Initialization Vector</b></p></li> </ul> <important><p>For the AES modes, your private encryption keys and your unencrypted data are never stored by AWS; therefore, it is important that you safely manage your encryption keys. If you lose them, you won\'t be able to unencrypt your data.</p></important>',
      ],
    ],
    'ExceptionMessages' => [
      'base' => NULL,
      'refs' => [
        'TestRoleResponse$Messages' => '<p>If the <code>Success</code> element contains <code>false</code>, this value is an array of one or more error messages that were generated during the test process.</p>',
      ],
    ],
    'Filename' => [
      'base' => NULL,
      'refs' => [
        'CreateJobPlaylist$Name' => '<p>The name that you want Elastic Transcoder to assign to the master playlist, for example, nyc-vacation.m3u8. If the name includes a <code>/</code> character, the section of the name before the last <code>/</code> must be identical for all <code>Name</code> objects. If you create more than one master playlist, the values of all <code>Name</code> objects must be unique.</p> <p><b>Note:</b> Elastic Transcoder automatically appends the relevant file extension to the file name (<code>.m3u8</code> for <code>HLSv3</code> and <code>HLSv4</code> playlists, and <code>.ism</code> and <code>.ismc</code> for <code>Smooth</code> playlists]. If you include a file extension in <code>Name</code>, the file name will have two extensions.</p>',
        'Playlist$Name' => '<p>The name that you want Elastic Transcoder to assign to the master playlist, for example, nyc-vacation.m3u8. If the name includes a <code>/</code> character, the section of the name before the last <code>/</code> must be identical for all <code>Name</code> objects. If you create more than one master playlist, the values of all <code>Name</code> objects must be unique.</p> <p><b>Note</b>: Elastic Transcoder automatically appends the relevant file extension to the file name (<code>.m3u8</code> for <code>HLSv3</code> and <code>HLSv4</code> playlists, and <code>.ism</code> and <code>.ismc</code> for <code>Smooth</code> playlists]. If you include a file extension in <code>Name</code>, the file name will have two extensions.</p>',
      ],
    ],
    'FixedGOP' => [
      'base' => NULL,
      'refs' => [
        'VideoParameters$FixedGOP' => '<p>Whether to use a fixed value for <code>FixedGOP</code>. Valid values are <code>true</code> and <code>false</code>:</p> <ul> <li> <code>true</code>: Elastic Transcoder uses the value of <code>KeyframesMaxDist</code> for the distance between key frames (the number of frames in a group of pictures, or GOP].</li> <li> <code>false</code>: The distance between key frames can vary.</li> </ul> <important><p><code>FixedGOP</code> must be set to <code>true</code> for <code>fmp4</code> containers.</p></important>',
      ],
    ],
    'Float' => [
      'base' => NULL,
      'refs' => [
        'CreateJobOutput$SegmentDuration' => '<p><important>(Outputs in Fragmented MP4 or MPEG-TS format only.</important>If you specify a preset in <code>PresetId</code> for which the value of <code>Container</code> is <code>fmp4</code> (Fragmented MP4] or <code>ts</code> (MPEG-TS], <code>SegmentDuration</code> is the target maximum duration of each segment in seconds. For <code>HLSv3</code> format playlists, each media segment is stored in a separate <code>.ts</code> file. For <code>HLSv4</code> and <code>Smooth</code> playlists, all media segments for an output are stored in a single file. Each segment is approximately the length of the <code>SegmentDuration</code>, though individual segments might be shorter or longer.</p> <p>The range of valid values is 1 to 60 seconds. If the duration of the video is not evenly divisible by <code>SegmentDuration</code>, the duration of the last segment is the remainder of total length/SegmentDuration.</p> <p>Elastic Transcoder creates an output-specific playlist for each output <code>HLS</code> output that you specify in OutputKeys. To add an output to the master playlist for this job, include it in the <code>OutputKeys</code> of the associated playlist.</p>',
        'JobOutput$SegmentDuration' => '<p><important>(Outputs in Fragmented MP4 or MPEG-TS format only.</important>If you specify a preset in <code>PresetId</code> for which the value of <code>Container</code> is <code>fmp4</code> (Fragmented MP4] or <code>ts</code> (MPEG-TS], <code>SegmentDuration</code> is the target maximum duration of each segment in seconds. For <code>HLSv3</code> format playlists, each media segment is stored in a separate <code>.ts</code> file. For <code>HLSv4</code> and <code>Smooth</code> playlists, all media segments for an output are stored in a single file. Each segment is approximately the length of the <code>SegmentDuration</code>, though individual segments might be shorter or longer.</p> <p>The range of valid values is 1 to 60 seconds. If the duration of the video is not evenly divisible by <code>SegmentDuration</code>, the duration of the last segment is the remainder of total length/SegmentDuration.</p> <p>Elastic Transcoder creates an output-specific playlist for each output <code>HLS</code> output that you specify in OutputKeys. To add an output to the master playlist for this job, include it in the <code>OutputKeys</code> of the associated playlist.</p>',
      ],
    ],
    'FrameRate' => [
      'base' => NULL,
      'refs' => [
        'JobInput$FrameRate' => '<p>The frame rate of the input file. If you want Elastic Transcoder to automatically detect the frame rate of the input file, specify <code>auto</code>. If you want to specify the frame rate for the input file, enter one of the following values: </p> <p> <code>10</code>, <code>15</code>, <code>23.97</code>, <code>24</code>, <code>25</code>, <code>29.97</code>, <code>30</code>, <code>60</code> </p> <p>If you specify a value other than <code>auto</code>, Elastic Transcoder disables automatic detection of the frame rate.</p>',
        'VideoParameters$FrameRate' => '<p>The frames per second for the video stream in the output file. Valid values include:</p> <p><code>auto</code>, <code>10</code>, <code>15</code>, <code>23.97</code>, <code>24</code>, <code>25</code>, <code>29.97</code>, <code>30</code>, <code>60</code></p> <p>If you specify <code>auto</code>, Elastic Transcoder uses the detected frame rate of the input source. If you specify a frame rate, we recommend that you perform the following calculation:</p> <p> <code>Frame rate = maximum recommended decoding speed in luma samples/second / (width in pixels * height in pixels]</code> </p> <p>where:</p> <ul> <li> <i>width in pixels</i> and <i>height in pixels</i> represent the Resolution of the output video.</li> <li> <i>maximum recommended decoding speed in Luma samples/second</i> is less than or equal to the maximum value listed in the following table, based on the value that you specified for Level.</li> </ul> <p>The maximum recommended decoding speed in Luma samples/second for each level is described in the following list (<i>Level - Decoding speed</i>]:</p> <ul> <li>1 - 380160</li> <li>1b - 380160</li> <li>1.1 - 76800</li> <li>1.2 - 1536000</li> <li>1.3 - 3041280</li> <li>2 - 3041280</li> <li>2.1 - 5068800</li> <li>2.2 - 5184000</li> <li>3 - 10368000</li> <li>3.1 - 27648000</li> <li>3.2 - 55296000</li> <li>4 - 62914560</li> <li>4.1 - 62914560</li> </ul>',
      ],
    ],
    'Grantee' => [
      'base' => NULL,
      'refs' => [
        'Permission$Grantee' => '<p>The AWS user or group that you want to have access to transcoded files and playlists. To identify the user or group, you can specify the canonical user ID for an AWS account, an origin access identity for a CloudFront distribution, the registered email address of an AWS account, or a predefined Amazon S3 group.</p>',
      ],
    ],
    'GranteeType' => [
      'base' => NULL,
      'refs' => [
        'Permission$GranteeType' => '<p>The type of value that appears in the Grantee object: <ul> <li> <code>Canonical</code>: Either the canonical user ID for an AWS account or an origin access identity for an Amazon CloudFront distribution. <important>A canonical user ID is not the same as an AWS account number.</important> </li> <li> <code>Email</code>: The registered email address of an AWS account.</li> <li> <code>Group</code>: One of the following predefined Amazon S3 groups: <code>AllUsers</code>, <code>AuthenticatedUsers</code>, or <code>LogDelivery</code>.</li> </ul> </p>',
      ],
    ],
    'HlsContentProtection' => [
      'base' => '<p>The HLS content protection settings, if any, that you want Elastic Transcoder to apply to your output files.</p>',
      'refs' => [
        'CreateJobPlaylist$HlsContentProtection' => '<p>The HLS content protection settings, if any, that you want Elastic Transcoder to apply to the output files associated with this playlist.</p>',
        'Playlist$HlsContentProtection' => '<p>The HLS content protection settings, if any, that you want Elastic Transcoder to apply to the output files associated with this playlist.</p>',
      ],
    ],
    'HlsContentProtectionMethod' => [
      'base' => NULL,
      'refs' => [
        'HlsContentProtection$Method' => '<p>The content protection method for your output. The only valid value is: <code>aes-128</code>.</p> <p>This value will be written into the method attribute of the <code>EXT-X-KEY</code> metadata tag in the output playlist.</p>',
      ],
    ],
    'HorizontalAlign' => [
      'base' => NULL,
      'refs' => [
        'PresetWatermark$HorizontalAlign' => '<p>The horizontal position of the watermark unless you specify a non-zero value for <code>HorizontalOffset</code>: <ul> <li> <b>Left</b>: The left edge of the watermark is aligned with the left border of the video.</li> <li> <b>Right</b>: The right edge of the watermark is aligned with the right border of the video.</li> <li> <b>Center</b>: The watermark is centered between the left and right borders.</li> </ul></p>',
      ],
    ],
    'Id' => [
      'base' => NULL,
      'refs' => [
        'CancelJobRequest$Id' => '<p>The identifier of the job that you want to cancel. </p> <p>To get a list of the jobs (including their <code>jobId</code>] that have a status of <code>Submitted</code>, use the <a>ListJobsByStatus</a> API action.</p>',
        'CreateJobOutput$PresetId' => '<p> The <code>Id</code> of the preset to use for this job. The preset determines the audio, video, and thumbnail settings that Elastic Transcoder uses for transcoding. </p>',
        'CreateJobRequest$PipelineId' => '<p>The <code>Id</code> of the pipeline that you want Elastic Transcoder to use for transcoding. The pipeline determines several settings, including the Amazon S3 bucket from which Elastic Transcoder gets the files to transcode and the bucket into which Elastic Transcoder puts the transcoded files.</p>',
        'DeletePipelineRequest$Id' => '<p>The identifier of the pipeline that you want to delete.</p>',
        'DeletePresetRequest$Id' => '<p>The identifier of the preset for which you want to get detailed information.</p>',
        'Job$Id' => '<p> The identifier that Elastic Transcoder assigned to the job. You use this value to get settings for the job or to delete the job. </p>',
        'Job$PipelineId' => '<p> The <code>Id</code> of the pipeline that you want Elastic Transcoder to use for transcoding. The pipeline determines several settings, including the Amazon S3 bucket from which Elastic Transcoder gets the files to transcode and the bucket into which Elastic Transcoder puts the transcoded files. </p>',
        'JobOutput$PresetId' => '<p>The value of the <code>Id</code> object for the preset that you want to use for this job. The preset determines the audio, video, and thumbnail settings that Elastic Transcoder uses for transcoding. To use a preset that you created, specify the preset ID that Elastic Transcoder returned in the response when you created the preset. You can also use the Elastic Transcoder system presets, which you can get with <code>ListPresets</code>.</p>',
        'ListJobsByPipelineRequest$PipelineId' => '<p> The ID of the pipeline for which you want to get job information. </p>',
        'ListJobsByPipelineRequest$PageToken' => '<p> When Elastic Transcoder returns more than one page of results, use <code>pageToken</code> in subsequent <code>GET</code> requests to get each successive page of results. </p>',
        'ListJobsByPipelineResponse$NextPageToken' => '<p> A value that you use to access the second and subsequent pages of results, if any. When the jobs in the specified pipeline fit on one page or when you\'ve reached the last page of results, the value of <code>NextPageToken</code> is <code>null</code>. </p>',
        'ListJobsByStatusRequest$PageToken' => '<p> When Elastic Transcoder returns more than one page of results, use <code>pageToken</code> in subsequent <code>GET</code> requests to get each successive page of results. </p>',
        'ListJobsByStatusResponse$NextPageToken' => '<p> A value that you use to access the second and subsequent pages of results, if any. When the jobs in the specified pipeline fit on one page or when you\'ve reached the last page of results, the value of <code>NextPageToken</code> is <code>null</code>. </p>',
        'ListPipelinesRequest$PageToken' => '<p>When Elastic Transcoder returns more than one page of results, use <code>pageToken</code> in subsequent <code>GET</code> requests to get each successive page of results. </p>',
        'ListPipelinesResponse$NextPageToken' => '<p>A value that you use to access the second and subsequent pages of results, if any. When the pipelines fit on one page or when you\'ve reached the last page of results, the value of <code>NextPageToken</code> is <code>null</code>.</p>',
        'ListPresetsRequest$PageToken' => '<p>When Elastic Transcoder returns more than one page of results, use <code>pageToken</code> in subsequent <code>GET</code> requests to get each successive page of results. </p>',
        'ListPresetsResponse$NextPageToken' => '<p>A value that you use to access the second and subsequent pages of results, if any. When the presets fit on one page or when you\'ve reached the last page of results, the value of <code>NextPageToken</code> is <code>null</code>.</p>',
        'Pipeline$Id' => '<p>The identifier for the pipeline. You use this value to identify the pipeline in which you want to perform a variety of operations, such as creating a job or a preset. </p>',
        'Preset$Id' => '<p>Identifier for the new preset. You use this value to get settings for the preset or to delete it.</p>',
        'ReadJobRequest$Id' => '<p>The identifier of the job for which you want to get detailed information.</p>',
        'ReadPipelineRequest$Id' => '<p>The identifier of the pipeline to read.</p>',
        'ReadPresetRequest$Id' => '<p>The identifier of the preset for which you want to get detailed information.</p>',
        'UpdatePipelineNotificationsRequest$Id' => '<p> The identifier of the pipeline for which you want to change notification settings. </p>',
        'UpdatePipelineRequest$Id' => '<p>The ID of the pipeline that you want to update.</p>',
        'UpdatePipelineStatusRequest$Id' => '<p>The identifier of the pipeline to update.</p>',
      ],
    ],
    'IncompatibleVersionException' => [
      'base' => NULL,
      'refs' => [],
    ],
    'Interlaced' => [
      'base' => NULL,
      'refs' => [
        'JobInput$Interlaced' => '<p>Whether the input file is interlaced. If you want Elastic Transcoder to automatically detect whether the input file is interlaced, specify <code>auto</code>. If you want to specify whether the input file is interlaced, enter one of the following values:</p> <p><code>true</code>, <code>false</code></p> <p>If you specify a value other than <code>auto</code>, Elastic Transcoder disables automatic detection of interlacing.</p>',
      ],
    ],
    'InternalServiceException' => [
      'base' => '<p>Elastic Transcoder encountered an unexpected exception while trying to fulfill the request.</p>',
      'refs' => [],
    ],
    'Job' => [
      'base' => '<p>A section of the response body that provides information about the job that is created.</p>',
      'refs' => [
        'CreateJobResponse$Job' => '<p> A section of the response body that provides information about the job that is created. </p>',
        'Jobs$member' => NULL,
        'ReadJobResponse$Job' => '<p>A section of the response body that provides information about the job.</p>',
      ],
    ],
    'JobAlbumArt' => [
      'base' => '<p>The .jpg or .png file associated with an audio file.</p>',
      'refs' => [
        'CreateJobOutput$AlbumArt' => '<p>Information about the album art that you want Elastic Transcoder to add to the file during transcoding. You can specify up to twenty album artworks for each output. Settings for each artwork must be defined in the job for the current output.</p>',
        'JobOutput$AlbumArt' => '<p>The album art to be associated with the output file, if any.</p>',
      ],
    ],
    'JobContainer' => [
      'base' => NULL,
      'refs' => [
        'JobInput$Container' => '<p>The container type for the input file. If you want Elastic Transcoder to automatically detect the container type of the input file, specify <code>auto</code>. If you want to specify the container type for the input file, enter one of the following values: </p> <p> <code>3gp</code>, <code>aac</code>, <code>asf</code>, <code>avi</code>, <code>divx</code>, <code>flv</code>, <code>m4a</code>, <code>mkv</code>, <code>mov</code>, <code>mp3</code>, <code>mp4</code>, <code>mpeg</code>, <code>mpeg-ps</code>, <code>mpeg-ts</code>, <code>mxf</code>, <code>ogg</code>, <code>vob</code>, <code>wav</code>, <code>webm</code> </p>',
      ],
    ],
    'JobInput' => [
      'base' => '<p>Information about the file that you\'re transcoding.</p>',
      'refs' => [
        'CreateJobRequest$Input' => '<p>A section of the request body that provides information about the file that is being transcoded.</p>',
        'Job$Input' => '<p> A section of the request or response body that provides information about the file that is being transcoded.</p>',
      ],
    ],
    'JobOutput' => [
      'base' => '<p><important>Outputs recommended instead.</important>If you specified one output for a job, information about that output. If you specified multiple outputs for a job, the <code>Output</code> object lists information about the first output. This duplicates the information that is listed for the first output in the <code>Outputs</code> object.</p>',
      'refs' => [
        'Job$Output' => '<p>If you specified one output for a job, information about that output. If you specified multiple outputs for a job, the Output object lists information about the first output. This duplicates the information that is listed for the first output in the Outputs object.</p> <p><important>Outputs recommended instead.</important> A section of the request or response body that provides information about the transcoded (target] file. </p>',
        'JobOutputs$member' => NULL,
      ],
    ],
    'JobOutputs' => [
      'base' => NULL,
      'refs' => [
        'Job$Outputs' => '<p>Information about the output files. We recommend that you use the <code>Outputs</code> syntax for all jobs, even when you want Elastic Transcoder to transcode a file into only one format. Do not use both the <code>Outputs</code> and <code>Output</code> syntaxes in the same request. You can create a maximum of 30 outputs per job. </p> <p> If you specify more than one output for a job, Elastic Transcoder creates the files for each output in the order in which you specify them in the job.</p>',
      ],
    ],
    'JobStatus' => [
      'base' => NULL,
      'refs' => [
        'Job$Status' => '<p> The status of the job: <code>Submitted</code>, <code>Progressing</code>, <code>Complete</code>, <code>Canceled</code>, or <code>Error</code>. </p>',
        'JobOutput$Status' => '<p> The status of one output in a job. If you specified only one output for the job, <code>Outputs:Status</code> is always the same as <code>Job:Status</code>. If you specified more than one output: <ul> <li> <code>Job:Status</code> and <code>Outputs:Status</code> for all of the outputs is Submitted until Elastic Transcoder starts to process the first output.</li> <li>When Elastic Transcoder starts to process the first output, <code>Outputs:Status</code> for that output and <code>Job:Status</code> both change to Progressing. For each output, the value of <code>Outputs:Status</code> remains Submitted until Elastic Transcoder starts to process the output.</li> <li>Job:Status remains Progressing until all of the outputs reach a terminal status, either Complete or Error.</li> <li>When all of the outputs reach a terminal status, <code>Job:Status</code> changes to Complete only if <code>Outputs:Status</code> for all of the outputs is <code>Complete</code>. If <code>Outputs:Status</code> for one or more outputs is <code>Error</code>, the terminal status for <code>Job:Status</code> is also <code>Error</code>.</li> </ul> The value of <code>Status</code> is one of the following: <code>Submitted</code>, <code>Progressing</code>, <code>Complete</code>, <code>Canceled</code>, or <code>Error</code>. </p>',
        'ListJobsByStatusRequest$Status' => '<p>To get information about all of the jobs associated with the current AWS account that have a given status, specify the following status: <code>Submitted</code>, <code>Progressing</code>, <code>Complete</code>, <code>Canceled</code>, or <code>Error</code>.</p>',
        'Playlist$Status' => '<p>The status of the job with which the playlist is associated.</p>',
      ],
    ],
    'JobWatermark' => [
      'base' => '<p>Watermarks can be in .png or .jpg format. If you want to display a watermark that is not rectangular, use the .png format, which supports transparency.</p>',
      'refs' => [
        'JobWatermarks$member' => NULL,
      ],
    ],
    'JobWatermarks' => [
      'base' => NULL,
      'refs' => [
        'CreateJobOutput$Watermarks' => '<p>Information about the watermarks that you want Elastic Transcoder to add to the video during transcoding. You can specify up to four watermarks for each output. Settings for each watermark must be defined in the preset for the current output.</p>',
        'JobOutput$Watermarks' => '<p>Information about the watermarks that you want Elastic Transcoder to add to the video during transcoding. You can specify up to four watermarks for each output. Settings for each watermark must be defined in the preset that you specify in <code>Preset</code> for the current output.</p> <p>Watermarks are added to the output video in the sequence in which you list them in the job output&#x2014;the first watermark in the list is added to the output video first, the second watermark in the list is added next, and so on. As a result, if the settings in a preset cause Elastic Transcoder to place all watermarks in the same location, the second watermark that you add will cover the first one, the third one will cover the second, and the fourth one will cover the third.</p>',
      ],
    ],
    'Jobs' => [
      'base' => NULL,
      'refs' => [
        'ListJobsByPipelineResponse$Jobs' => '<p>An array of <code>Job</code> objects that are in the specified pipeline.</p>',
        'ListJobsByStatusResponse$Jobs' => '<p>An array of <code>Job</code> objects that have the specified status.</p>',
      ],
    ],
    'JpgOrPng' => [
      'base' => NULL,
      'refs' => [
        'Artwork$AlbumArtFormat' => '<p>The format of album art, if any. Valid formats are <code>.jpg</code> and <code>.png</code>.</p>',
        'Thumbnails$Format' => '<p>The format of thumbnails, if any. Valid values are <code>jpg</code> and <code>png</code>. </p> <p>You specify whether you want Elastic Transcoder to create thumbnails when you create a job.</p>',
      ],
    ],
    'Key' => [
      'base' => NULL,
      'refs' => [
        'CaptionSource$Key' => '<p>The name of the sidecar caption file that you want Elastic Transcoder to include in the output file.</p>',
        'CaptionSource$Language' => '<p>A string that specifies the language of the caption. Specify this as one of:</p> <ul> <li><p>2-character ISO 639-1 code</p></li> <li><p>3-character ISO 639-2 code</p></li> </ul> <p>For more information on ISO language codes and language names, see the List of ISO 639-1 codes.</p>',
        'CreateJobOutput$Key' => '<p> The name to assign to the transcoded file. Elastic Transcoder saves the file in the Amazon S3 bucket specified by the <code>OutputBucket</code> object in the pipeline that is specified by the pipeline ID. If a file with the specified name already exists in the output bucket, the job fails. </p>',
        'CreateJobRequest$OutputKeyPrefix' => '<p>The value, if any, that you want Elastic Transcoder to prepend to the names of all files that this job creates, including output files, thumbnails, and playlists.</p>',
        'Job$OutputKeyPrefix' => '<p>The value, if any, that you want Elastic Transcoder to prepend to the names of all files that this job creates, including output files, thumbnails, and playlists. We recommend that you add a / or some other delimiter to the end of the <code>OutputKeyPrefix</code>.</p>',
        'JobInput$Key' => '<p> The name of the file to transcode. Elsewhere in the body of the JSON block is the the ID of the pipeline to use for processing the job. The <code>InputBucket</code> object in that pipeline tells Elastic Transcoder which Amazon S3 bucket to get the file from. </p> <p>If the file name includes a prefix, such as <code>cooking/lasagna.mpg</code>, include the prefix in the key. If the file isn\'t in the specified bucket, Elastic Transcoder returns an error.</p>',
        'JobOutput$Key' => '<p> The name to assign to the transcoded file. Elastic Transcoder saves the file in the Amazon S3 bucket specified by the <code>OutputBucket</code> object in the pipeline that is specified by the pipeline ID.</p>',
        'OutputKeys$member' => NULL,
      ],
    ],
    'KeyArn' => [
      'base' => NULL,
      'refs' => [
        'CreatePipelineRequest$AwsKmsKeyArn' => '<p>The AWS Key Management Service (AWS KMS] key that you want to use with this pipeline.</p> <p>If you use either <code>S3</code> or <code>S3-AWS-KMS</code> as your <code>Encryption:Mode</code>, you don\'t need to provide a key with your job because a default key, known as an AWS-KMS key, is created for you automatically. You need to provide an AWS-KMS key only if you want to use a non-default AWS-KMS key, or if you are using an <code>Encryption:Mode</code> of <code>AES-PKCS7</code>, <code>AES-CTR</code>, or <code>AES-GCM</code>.</p>',
        'Pipeline$AwsKmsKeyArn' => '<p>The AWS Key Management Service (AWS KMS] key that you want to use with this pipeline.</p> <p>If you use either <code>S3</code> or <code>S3-AWS-KMS</code> as your <code>Encryption:Mode</code>, you don\'t need to provide a key with your job because a default key, known as an AWS-KMS key, is created for you automatically. You need to provide an AWS-KMS key only if you want to use a non-default AWS-KMS key, or if you are using an <code>Encryption:Mode</code> of <code>AES-PKCS7</code>, <code>AES-CTR</code>, or <code>AES-GCM</code>.</p>',
        'UpdatePipelineRequest$AwsKmsKeyArn' => '<p>The AWS Key Management Service (AWS KMS] key that you want to use with this pipeline.</p> <p>If you use either <code>S3</code> or <code>S3-AWS-KMS</code> as your <code>Encryption:Mode</code>, you don\'t need to provide a key with your job because a default key, known as an AWS-KMS key, is created for you automatically. You need to provide an AWS-KMS key only if you want to use a non-default AWS-KMS key, or if you are using an <code>Encryption:Mode</code> of <code>AES-PKCS7</code>, <code>AES-CTR</code>, or <code>AES-GCM</code>.</p>',
      ],
    ],
    'KeyStoragePolicy' => [
      'base' => NULL,
      'refs' => [
        'HlsContentProtection$KeyStoragePolicy' => '<p>Specify whether you want Elastic Transcoder to write your HLS license key to an Amazon S3 bucket. If you choose <code>WithVariantPlaylists</code>, <code>LicenseAcquisitionUrl</code> must be left blank and Elastic Transcoder writes your data key into the same bucket as the associated playlist.</p>',
      ],
    ],
    'KeyframesMaxDist' => [
      'base' => NULL,
      'refs' => [
        'VideoParameters$KeyframesMaxDist' => '<p>The maximum number of frames between key frames. Key frames are fully encoded frames; the frames between key frames are encoded based, in part, on the content of the key frames. The value is an integer formatted as a string; valid values are between 1 (every frame is a key frame] and 100000, inclusive. A higher value results in higher compression but may also discernibly decrease video quality.</p> <p>For <code>Smooth</code> outputs, the <code>FrameRate</code> must have a constant ratio to the <code>KeyframesMaxDist</code>. This allows <code>Smooth</code> playlists to switch between different quality levels while the file is being played.</p> <p>For example, an input file can have a <code>FrameRate</code> of 30 with a <code>KeyframesMaxDist</code> of 90. The output file then needs to have a ratio of 1:3. Valid outputs would have <code>FrameRate</code> of 30, 25, and 10, and <code>KeyframesMaxDist</code> of 90, 75, and 30, respectively.</p> <p>Alternately, this can be achieved by setting <code>FrameRate</code> to auto and having the same values for <code>MaxFrameRate</code> and <code>KeyframesMaxDist</code>.</p>',
      ],
    ],
    'LimitExceededException' => [
      'base' => '<p>Too many operations for a given AWS account. For example, the number of pipelines exceeds the maximum allowed.</p>',
      'refs' => [],
    ],
    'ListJobsByPipelineRequest' => [
      'base' => '<p>The <code>ListJobsByPipelineRequest</code> structure.</p>',
      'refs' => [],
    ],
    'ListJobsByPipelineResponse' => [
      'base' => '<p>The <code>ListJobsByPipelineResponse</code> structure.</p>',
      'refs' => [],
    ],
    'ListJobsByStatusRequest' => [
      'base' => '<p>The <code>ListJobsByStatusRequest</code> structure.</p>',
      'refs' => [],
    ],
    'ListJobsByStatusResponse' => [
      'base' => '<p> The <code>ListJobsByStatusResponse</code> structure. </p>',
      'refs' => [],
    ],
    'ListPipelinesRequest' => [
      'base' => '<p>The <code>ListPipelineRequest</code> structure.</p>',
      'refs' => [],
    ],
    'ListPipelinesResponse' => [
      'base' => '<p>A list of the pipelines associated with the current AWS account.</p>',
      'refs' => [],
    ],
    'ListPresetsRequest' => [
      'base' => '<p>The <code>ListPresetsRequest</code> structure.</p>',
      'refs' => [],
    ],
    'ListPresetsResponse' => [
      'base' => '<p>The <code>ListPresetsResponse</code> structure.</p>',
      'refs' => [],
    ],
    'MaxFrameRate' => [
      'base' => NULL,
      'refs' => [
        'VideoParameters$MaxFrameRate' => '<p>If you specify <code>auto</code> for <code>FrameRate</code>, Elastic Transcoder uses the frame rate of the input video for the frame rate of the output video. Specify the maximum frame rate that you want Elastic Transcoder to use when the frame rate of the input video is greater than the desired maximum frame rate of the output video. Valid values include: <code>10</code>, <code>15</code>, <code>23.97</code>, <code>24</code>, <code>25</code>, <code>29.97</code>, <code>30</code>, <code>60</code>.</p>',
      ],
    ],
    'MergePolicy' => [
      'base' => NULL,
      'refs' => [
        'JobAlbumArt$MergePolicy' => '<p>A policy that determines how Elastic Transcoder will handle the existence of multiple album artwork files.</p> <p> <ul> <li> <code>Replace:</code> The specified album art will replace any existing album art.</li> <li> <code>Prepend:</code> The specified album art will be placed in front of any existing album art.</li> <li> <code>Append:</code> The specified album art will be placed after any existing album art.</li> <li> <code>Fallback:</code> If the original input file contains artwork, Elastic Transcoder will use that artwork for the output. If the original input does not contain artwork, Elastic Transcoder will use the specified album art file.</li> </ul> </p>',
      ],
    ],
    'Name' => [
      'base' => NULL,
      'refs' => [
        'CaptionSource$Label' => '<p>The label of the caption shown in the player when choosing a language. We recommend that you put the caption language name here, in the language of the captions.</p>',
        'CreatePipelineRequest$Name' => '<p>The name of the pipeline. We recommend that the name be unique within the AWS account, but uniqueness is not enforced.</p> <p>Constraints: Maximum 40 characters.</p>',
        'CreatePresetRequest$Name' => '<p>The name of the preset. We recommend that the name be unique within the AWS account, but uniqueness is not enforced.</p>',
        'Pipeline$Name' => '<p>The name of the pipeline. We recommend that the name be unique within the AWS account, but uniqueness is not enforced.</p> <p>Constraints: Maximum 40 characters</p>',
        'Preset$Name' => '<p>The name of the preset.</p>',
        'UpdatePipelineRequest$Name' => '<p>The name of the pipeline. We recommend that the name be unique within the AWS account, but uniqueness is not enforced.</p> <p>Constraints: Maximum 40 characters</p>',
      ],
    ],
    'Notifications' => [
      'base' => '<p>The Amazon Simple Notification Service (Amazon SNS] topic or topics to notify in order to report job status.</p> <important>To receive notifications, you must also subscribe to the new topic in the Amazon SNS console.</important>',
      'refs' => [
        'CreatePipelineRequest$Notifications' => '<p>The Amazon Simple Notification Service (Amazon SNS] topic that you want to notify to report job status.</p> <important>To receive notifications, you must also subscribe to the new topic in the Amazon SNS console.</important> <ul> <li> <b>Progressing</b>: The topic ARN for the Amazon Simple Notification Service (Amazon SNS] topic that you want to notify when Elastic Transcoder has started to process a job in this pipeline. This is the ARN that Amazon SNS returned when you created the topic. For more information, see Create a Topic in the Amazon Simple Notification Service Developer Guide.</li> <li> <b>Completed</b>: The topic ARN for the Amazon SNS topic that you want to notify when Elastic Transcoder has finished processing a job in this pipeline. This is the ARN that Amazon SNS returned when you created the topic.</li> <li> <b>Warning</b>: The topic ARN for the Amazon SNS topic that you want to notify when Elastic Transcoder encounters a warning condition while processing a job in this pipeline. This is the ARN that Amazon SNS returned when you created the topic.</li> <li> <b>Error</b>: The topic ARN for the Amazon SNS topic that you want to notify when Elastic Transcoder encounters an error condition while processing a job in this pipeline. This is the ARN that Amazon SNS returned when you created the topic.</li> </ul>',
        'Pipeline$Notifications' => '<p>The Amazon Simple Notification Service (Amazon SNS] topic that you want to notify to report job status.</p> <important>To receive notifications, you must also subscribe to the new topic in the Amazon SNS console.</important> <ul> <li> <b>Progressing</b> (optional]: The Amazon Simple Notification Service (Amazon SNS] topic that you want to notify when Elastic Transcoder has started to process the job.</li> <li> <b>Completed</b> (optional]: The Amazon SNS topic that you want to notify when Elastic Transcoder has finished processing the job.</li> <li> <b>Warning</b> (optional]: The Amazon SNS topic that you want to notify when Elastic Transcoder encounters a warning condition.</li> <li> <b>Error</b> (optional]: The Amazon SNS topic that you want to notify when Elastic Transcoder encounters an error condition.</li> </ul>',
        'UpdatePipelineNotificationsRequest$Notifications' => '<p>The topic ARN for the Amazon Simple Notification Service (Amazon SNS] topic that you want to notify to report job status.</p> <important>To receive notifications, you must also subscribe to the new topic in the Amazon SNS console.</important> <ul> <li> <b>Progressing</b>: The topic ARN for the Amazon Simple Notification Service (Amazon SNS] topic that you want to notify when Elastic Transcoder has started to process jobs that are added to this pipeline. This is the ARN that Amazon SNS returned when you created the topic.</li> <li> <b>Completed</b>: The topic ARN for the Amazon SNS topic that you want to notify when Elastic Transcoder has finished processing a job. This is the ARN that Amazon SNS returned when you created the topic.</li> <li> <b>Warning</b>: The topic ARN for the Amazon SNS topic that you want to notify when Elastic Transcoder encounters a warning condition. This is the ARN that Amazon SNS returned when you created the topic.</li> <li> <b>Error</b>: The topic ARN for the Amazon SNS topic that you want to notify when Elastic Transcoder encounters an error condition. This is the ARN that Amazon SNS returned when you created the topic.</li> </ul>',
        'UpdatePipelineRequest$Notifications' => NULL,
      ],
    ],
    'NullableInteger' => [
      'base' => NULL,
      'refs' => [
        'JobOutput$Width' => '<p>Specifies the width of the output file in pixels.</p>',
        'JobOutput$Height' => '<p>Height of the output file, in pixels.</p>',
      ],
    ],
    'NullableLong' => [
      'base' => NULL,
      'refs' => [
        'JobOutput$Duration' => '<p>Duration of the output file, in seconds.</p>',
      ],
    ],
    'Opacity' => [
      'base' => NULL,
      'refs' => [
        'PresetWatermark$Opacity' => '<p>A percentage that indicates how much you want a watermark to obscure the video in the location where it appears. Valid values are 0 (the watermark is invisible] to 100 (the watermark completely obscures the video in the specified location]. The datatype of <code>Opacity</code> is float.</p> <p>Elastic Transcoder supports transparent .png graphics. If you use a transparent .png, the transparent portion of the video appears as if you had specified a value of 0 for <code>Opacity</code>. The .jpg file format doesn\'t support transparency.</p>',
      ],
    ],
    'OutputKeys' => [
      'base' => NULL,
      'refs' => [
        'CreateJobPlaylist$OutputKeys' => '<p>For each output in this job that you want to include in a master playlist, the value of the <code>Outputs:Key</code> object. </p> <ul> <li> <p>If your output is not <code>HLS</code> or does not have a segment duration set, the name of the output file is a concatenation of <code>OutputKeyPrefix</code> and <code>Outputs:Key</code>:</p> <p>OutputKeyPrefix<code>Outputs:Key</code></p> </li> <li> <p>If your output is <code>HLSv3</code> and has a segment duration set, or is not included in a playlist, Elastic Transcoder creates an output playlist file with a file extension of <code>.m3u8</code>, and a series of <code>.ts</code> files that include a five-digit sequential counter beginning with 00000:</p> <p>OutputKeyPrefix<code>Outputs:Key</code>.m3u8</p> <p>OutputKeyPrefix<code>Outputs:Key</code>00000.ts</p> </li> <li> <p>If your output is <code>HLSv4</code>, has a segment duration set, and is included in an <code>HLSv4</code> playlist, Elastic Transcoder creates an output playlist file with a file extension of <code>_v4.m3u8</code>. If the output is video, Elastic Transcoder also creates an output file with an extension of <code>_iframe.m3u8</code>:</p> <p>OutputKeyPrefix<code>Outputs:Key</code>_v4.m3u8</p> <p>OutputKeyPrefix<code>Outputs:Key</code>_iframe.m3u8</p> <p>OutputKeyPrefix<code>Outputs:Key</code>.ts</p> </li> </ul> <p>Elastic Transcoder automatically appends the relevant file extension to the file name. If you include a file extension in Output Key, the file name will have two extensions.</p> <p>If you include more than one output in a playlist, any segment duration settings, clip settings, or caption settings must be the same for all outputs in the playlist. For <code>Smooth</code> playlists, the <code>Audio:Profile</code>, <code>Video:Profile</code>, and <code>Video:FrameRate</code> to <code>Video:KeyframesMaxDist</code> ratio must be the same for all outputs.</p>',
        'Playlist$OutputKeys' => '<p>For each output in this job that you want to include in a master playlist, the value of the Outputs:Key object.</p> <ul> <li> <p>If your output is not <code>HLS</code> or does not have a segment duration set, the name of the output file is a concatenation of <code>OutputKeyPrefix</code> and <code>Outputs:Key</code>:</p> <p>OutputKeyPrefix<code>Outputs:Key</code></p> </li> <li> <p>If your output is <code>HLSv3</code> and has a segment duration set, or is not included in a playlist, Elastic Transcoder creates an output playlist file with a file extension of <code>.m3u8</code>, and a series of <code>.ts</code> files that include a five-digit sequential counter beginning with 00000:</p> <p>OutputKeyPrefix<code>Outputs:Key</code>.m3u8</p> <p>OutputKeyPrefix<code>Outputs:Key</code>00000.ts</p> </li> <li> <p>If your output is <code>HLSv4</code>, has a segment duration set, and is included in an <code>HLSv4</code> playlist, Elastic Transcoder creates an output playlist file with a file extension of <code>_v4.m3u8</code>. If the output is video, Elastic Transcoder also creates an output file with an extension of <code>_iframe.m3u8</code>:</p> <p>OutputKeyPrefix<code>Outputs:Key</code>_v4.m3u8</p> <p>OutputKeyPrefix<code>Outputs:Key</code>_iframe.m3u8</p> <p>OutputKeyPrefix<code>Outputs:Key</code>.ts</p> </li> </ul> <p>Elastic Transcoder automatically appends the relevant file extension to the file name. If you include a file extension in Output Key, the file name will have two extensions.</p> <p>If you include more than one output in a playlist, any segment duration settings, clip settings, or caption settings must be the same for all outputs in the playlist. For <code>Smooth</code> playlists, the <code>Audio:Profile</code>, <code>Video:Profile</code>, and <code>Video:FrameRate</code> to <code>Video:KeyframesMaxDist</code> ratio must be the same for all outputs.</p>',
      ],
    ],
    'PaddingPolicy' => [
      'base' => NULL,
      'refs' => [
        'Artwork$PaddingPolicy' => '<p>When you set <code>PaddingPolicy</code> to <code>Pad</code>, Elastic Transcoder may add white bars to the top and bottom and/or left and right sides of the output album art to make the total size of the output art match the values that you specified for <code>MaxWidth</code> and <code>MaxHeight</code>.</p>',
        'Thumbnails$PaddingPolicy' => '<p>When you set <code>PaddingPolicy</code> to <code>Pad</code>, Elastic Transcoder may add black bars to the top and bottom and/or left and right sides of thumbnails to make the total size of the thumbnails match the values that you specified for thumbnail <code>MaxWidth</code> and <code>MaxHeight</code> settings.</p>',
        'VideoParameters$PaddingPolicy' => '<p>When you set <code>PaddingPolicy</code> to <code>Pad</code>, Elastic Transcoder may add black bars to the top and bottom and/or left and right sides of the output video to make the total size of the output video match the values that you specified for <code>MaxWidth</code> and <code>MaxHeight</code>.</p>',
      ],
    ],
    'Permission' => [
      'base' => '<p>The <code>Permission</code> structure.</p>',
      'refs' => [
        'Permissions$member' => NULL,
      ],
    ],
    'Permissions' => [
      'base' => NULL,
      'refs' => [
        'PipelineOutputConfig$Permissions' => '<p>Optional. The <code>Permissions</code> object specifies which users and/or predefined Amazon S3 groups you want to have access to transcoded files and playlists, and the type of access you want them to have. You can grant permissions to a maximum of 30 users and/or predefined Amazon S3 groups.</p> <p>If you include <code>Permissions</code>, Elastic Transcoder grants only the permissions that you specify. It does not grant full permissions to the owner of the role specified by <code>Role</code>. If you want that user to have full control, you must explicitly grant full control to the user.</p> <p> If you omit <code>Permissions</code>, Elastic Transcoder grants full control over the transcoded files and playlists to the owner of the role specified by <code>Role</code>, and grants no other permissions to any other user or group.</p>',
      ],
    ],
    'Pipeline' => [
      'base' => '<p>The pipeline (queue] that is used to manage jobs.</p>',
      'refs' => [
        'CreatePipelineResponse$Pipeline' => '<p>A section of the response body that provides information about the pipeline that is created.</p>',
        'Pipelines$member' => NULL,
        'ReadPipelineResponse$Pipeline' => '<p>A section of the response body that provides information about the pipeline.</p>',
        'UpdatePipelineNotificationsResponse$Pipeline' => '<p>A section of the response body that provides information about the pipeline.</p>',
        'UpdatePipelineResponse$Pipeline' => NULL,
        'UpdatePipelineStatusResponse$Pipeline' => '<p>A section of the response body that provides information about the pipeline.</p>',
      ],
    ],
    'PipelineOutputConfig' => [
      'base' => '<p>The <code>PipelineOutputConfig</code> structure.</p>',
      'refs' => [
        'CreatePipelineRequest$ContentConfig' => '<p>The optional <code>ContentConfig</code> object specifies information about the Amazon S3 bucket in which you want Elastic Transcoder to save transcoded files and playlists: which bucket to use, which users you want to have access to the files, the type of access you want users to have, and the storage class that you want to assign to the files.</p> <p>If you specify values for <code>ContentConfig</code>, you must also specify values for <code>ThumbnailConfig</code>.</p> <p>If you specify values for <code>ContentConfig</code> and <code>ThumbnailConfig</code>, omit the <code>OutputBucket</code> object.</p> <ul> <li> <b>Bucket</b>: The Amazon S3 bucket in which you want Elastic Transcoder to save transcoded files and playlists.</li> <li> <b>Permissions</b> (Optional]: The Permissions object specifies which users you want to have access to transcoded files and the type of access you want them to have. You can grant permissions to a maximum of 30 users and/or predefined Amazon S3 groups.</li> <li> <b>Grantee Type</b>: Specify the type of value that appears in the <code>Grantee</code> object: <ul> <li> <b>Canonical</b>: The value in the <code>Grantee</code> object is either the canonical user ID for an AWS account or an origin access identity for an Amazon CloudFront distribution. For more information about canonical user IDs, see Access Control List (ACL] Overview in the Amazon Simple Storage Service Developer Guide. For more information about using CloudFront origin access identities to require that users use CloudFront URLs instead of Amazon S3 URLs, see Using an Origin Access Identity to Restrict Access to Your Amazon S3 Content. <important>A canonical user ID is not the same as an AWS account number.</important> </li> <li> <b>Email</b>: The value in the <code>Grantee</code> object is the registered email address of an AWS account.</li> <li> <b>Group</b>: The value in the <code>Grantee</code> object is one of the following predefined Amazon S3 groups: <code>AllUsers</code>, <code>AuthenticatedUsers</code>, or <code>LogDelivery</code>.</li> </ul> </li> <li> <b>Grantee</b>: The AWS user or group that you want to have access to transcoded files and playlists. To identify the user or group, you can specify the canonical user ID for an AWS account, an origin access identity for a CloudFront distribution, the registered email address of an AWS account, or a predefined Amazon S3 group </li> <li> <b>Access</b>: The permission that you want to give to the AWS user that you specified in <code>Grantee</code>. Permissions are granted on the files that Elastic Transcoder adds to the bucket, including playlists and video files. Valid values include: <ul> <li> <code>READ</code>: The grantee can read the objects and metadata for objects that Elastic Transcoder adds to the Amazon S3 bucket.</li> <li> <code>READ_ACP</code>: The grantee can read the object ACL for objects that Elastic Transcoder adds to the Amazon S3 bucket. </li> <li> <code>WRITE_ACP</code>: The grantee can write the ACL for the objects that Elastic Transcoder adds to the Amazon S3 bucket.</li> <li> <code>FULL_CONTROL</code>: The grantee has <code>READ</code>, <code>READ_ACP</code>, and <code>WRITE_ACP</code> permissions for the objects that Elastic Transcoder adds to the Amazon S3 bucket.</li> </ul> </li> <li> <b>StorageClass</b>: The Amazon S3 storage class, <code>Standard</code> or <code>ReducedRedundancy</code>, that you want Elastic Transcoder to assign to the video files and playlists that it stores in your Amazon S3 bucket.</li> </ul>',
        'CreatePipelineRequest$ThumbnailConfig' => '<p>The <code>ThumbnailConfig</code> object specifies several values, including the Amazon S3 bucket in which you want Elastic Transcoder to save thumbnail files, which users you want to have access to the files, the type of access you want users to have, and the storage class that you want to assign to the files.</p> <p>If you specify values for <code>ContentConfig</code>, you must also specify values for <code>ThumbnailConfig</code> even if you don\'t want to create thumbnails.</p> <p>If you specify values for <code>ContentConfig</code> and <code>ThumbnailConfig</code>, omit the <code>OutputBucket</code> object.</p> <ul> <li> <b>Bucket</b>: The Amazon S3 bucket in which you want Elastic Transcoder to save thumbnail files.</li> <li> <b>Permissions</b> (Optional]: The <code>Permissions</code> object specifies which users and/or predefined Amazon S3 groups you want to have access to thumbnail files, and the type of access you want them to have. You can grant permissions to a maximum of 30 users and/or predefined Amazon S3 groups.</li> <li> <b>GranteeType</b>: Specify the type of value that appears in the Grantee object: <ul> <li> <b>Canonical</b>: The value in the <code>Grantee</code> object is either the canonical user ID for an AWS account or an origin access identity for an Amazon CloudFront distribution. <important>A canonical user ID is not the same as an AWS account number.</important> </li> <li> <b>Email</b>: The value in the <code>Grantee</code> object is the registered email address of an AWS account. </li> <li> <b>Group</b>: The value in the <code>Grantee</code> object is one of the following predefined Amazon S3 groups: <code>AllUsers</code>, <code>AuthenticatedUsers</code>, or <code>LogDelivery</code>.</li> </ul> </li> <li> <b>Grantee</b>: The AWS user or group that you want to have access to thumbnail files. To identify the user or group, you can specify the canonical user ID for an AWS account, an origin access identity for a CloudFront distribution, the registered email address of an AWS account, or a predefined Amazon S3 group. </li> <li> <b>Access</b>: The permission that you want to give to the AWS user that you specified in <code>Grantee</code>. Permissions are granted on the thumbnail files that Elastic Transcoder adds to the bucket. Valid values include: <ul> <li> <code>READ</code>: The grantee can read the thumbnails and metadata for objects that Elastic Transcoder adds to the Amazon S3 bucket.</li> <li> <code>READ_ACP</code>: The grantee can read the object ACL for thumbnails that Elastic Transcoder adds to the Amazon S3 bucket. </li> <li> <code>WRITE_ACP</code>: The grantee can write the ACL for the thumbnails that Elastic Transcoder adds to the Amazon S3 bucket.</li> <li> <code>FULL_CONTROL</code>: The grantee has <code>READ</code>, <code>READ_ACP</code>, and <code>WRITE_ACP</code> permissions for the thumbnails that Elastic Transcoder adds to the Amazon S3 bucket. </li> </ul> </li> <li> <b>StorageClass</b>: The Amazon S3 storage class, <code>Standard</code> or <code>ReducedRedundancy</code>, that you want Elastic Transcoder to assign to the thumbnails that it stores in your Amazon S3 bucket.</li> </ul>',
        'Pipeline$ContentConfig' => '<p>Information about the Amazon S3 bucket in which you want Elastic Transcoder to save transcoded files and playlists. Either you specify both <code>ContentConfig</code> and <code>ThumbnailConfig</code>, or you specify <code>OutputBucket</code>.</p> <ul> <li> <b>Bucket</b>: The Amazon S3 bucket in which you want Elastic Transcoder to save transcoded files and playlists.</li> <li> <b>Permissions</b>: A list of the users and/or predefined Amazon S3 groups you want to have access to transcoded files and playlists, and the type of access that you want them to have. <ul> <li>GranteeType: The type of value that appears in the <code>Grantee</code> object: <ul> <li> <code>Canonical</code>: Either the canonical user ID for an AWS account or an origin access identity for an Amazon CloudFront distribution.</li> <li> <code>Email</code>: The registered email address of an AWS account.</li> <li> <code>Group</code>: One of the following predefined Amazon S3 groups: <code>AllUsers</code>, <code>AuthenticatedUsers</code>, or <code>LogDelivery</code>.</li> </ul> </li> <li> <code>Grantee</code>: The AWS user or group that you want to have access to transcoded files and playlists.</li> <li> <code>Access</code>: The permission that you want to give to the AWS user that is listed in <code>Grantee</code>. Valid values include: <ul> <li> <code>READ</code>: The grantee can read the objects and metadata for objects that Elastic Transcoder adds to the Amazon S3 bucket.</li> <li> <code>READ_ACP</code>: The grantee can read the object ACL for objects that Elastic Transcoder adds to the Amazon S3 bucket.</li> <li> <code>WRITE_ACP</code>: The grantee can write the ACL for the objects that Elastic Transcoder adds to the Amazon S3 bucket.</li> <li> <code>FULL_CONTROL</code>: The grantee has <code>READ</code>, <code>READ_ACP</code>, and <code>WRITE_ACP</code> permissions for the objects that Elastic Transcoder adds to the Amazon S3 bucket.</li> </ul> </li> </ul> </li> <li> <b>StorageClass</b>: The Amazon S3 storage class, Standard or ReducedRedundancy, that you want Elastic Transcoder to assign to the video files and playlists that it stores in your Amazon S3 bucket. </li> </ul>',
        'Pipeline$ThumbnailConfig' => '<p>Information about the Amazon S3 bucket in which you want Elastic Transcoder to save thumbnail files. Either you specify both <code>ContentConfig</code> and <code>ThumbnailConfig</code>, or you specify <code>OutputBucket</code>.</p> <ul> <li> <code>Bucket</code>: The Amazon S3 bucket in which you want Elastic Transcoder to save thumbnail files. </li> <li> <code>Permissions</code>: A list of the users and/or predefined Amazon S3 groups you want to have access to thumbnail files, and the type of access that you want them to have. <ul> <li>GranteeType: The type of value that appears in the Grantee object: <ul> <li> <code>Canonical</code>: Either the canonical user ID for an AWS account or an origin access identity for an Amazon CloudFront distribution. <important>A canonical user ID is not the same as an AWS account number.</important> </li> <li> <code>Email</code>: The registered email address of an AWS account.</li> <li> <code>Group</code>: One of the following predefined Amazon S3 groups: <code>AllUsers</code>, <code>AuthenticatedUsers</code>, or <code>LogDelivery</code>.</li> </ul> </li> <li> <code>Grantee</code>: The AWS user or group that you want to have access to thumbnail files.</li> <li>Access: The permission that you want to give to the AWS user that is listed in Grantee. Valid values include: <ul> <li> <code>READ</code>: The grantee can read the thumbnails and metadata for thumbnails that Elastic Transcoder adds to the Amazon S3 bucket.</li> <li> <code>READ_ACP</code>: The grantee can read the object ACL for thumbnails that Elastic Transcoder adds to the Amazon S3 bucket.</li> <li> <code>WRITE_ACP</code>: The grantee can write the ACL for the thumbnails that Elastic Transcoder adds to the Amazon S3 bucket.</li> <li> <code>FULL_CONTROL</code>: The grantee has READ, READ_ACP, and WRITE_ACP permissions for the thumbnails that Elastic Transcoder adds to the Amazon S3 bucket.</li> </ul> </li> </ul> </li> <li> <code>StorageClass</code>: The Amazon S3 storage class, <code>Standard</code> or <code>ReducedRedundancy</code>, that you want Elastic Transcoder to assign to the thumbnails that it stores in your Amazon S3 bucket.</li> </ul>',
        'UpdatePipelineRequest$ContentConfig' => '<p>The optional <code>ContentConfig</code> object specifies information about the Amazon S3 bucket in which you want Elastic Transcoder to save transcoded files and playlists: which bucket to use, which users you want to have access to the files, the type of access you want users to have, and the storage class that you want to assign to the files.</p> <p>If you specify values for <code>ContentConfig</code>, you must also specify values for <code>ThumbnailConfig</code>.</p> <p>If you specify values for <code>ContentConfig</code> and <code>ThumbnailConfig</code>, omit the <code>OutputBucket</code> object.</p> <ul> <li> <b>Bucket</b>: The Amazon S3 bucket in which you want Elastic Transcoder to save transcoded files and playlists.</li> <li> <b>Permissions</b> (Optional]: The Permissions object specifies which users you want to have access to transcoded files and the type of access you want them to have. You can grant permissions to a maximum of 30 users and/or predefined Amazon S3 groups.</li> <li> <b>Grantee Type</b>: Specify the type of value that appears in the <code>Grantee</code> object: <ul> <li> <b>Canonical</b>: The value in the <code>Grantee</code> object is either the canonical user ID for an AWS account or an origin access identity for an Amazon CloudFront distribution. For more information about canonical user IDs, see Access Control List (ACL] Overview in the Amazon Simple Storage Service Developer Guide. For more information about using CloudFront origin access identities to require that users use CloudFront URLs instead of Amazon S3 URLs, see Using an Origin Access Identity to Restrict Access to Your Amazon S3 Content. <important>A canonical user ID is not the same as an AWS account number.</important> </li> <li> <b>Email</b>: The value in the <code>Grantee</code> object is the registered email address of an AWS account.</li> <li> <b>Group</b>: The value in the <code>Grantee</code> object is one of the following predefined Amazon S3 groups: <code>AllUsers</code>, <code>AuthenticatedUsers</code>, or <code>LogDelivery</code>.</li> </ul> </li> <li> <b>Grantee</b>: The AWS user or group that you want to have access to transcoded files and playlists. To identify the user or group, you can specify the canonical user ID for an AWS account, an origin access identity for a CloudFront distribution, the registered email address of an AWS account, or a predefined Amazon S3 group </li> <li> <b>Access</b>: The permission that you want to give to the AWS user that you specified in <code>Grantee</code>. Permissions are granted on the files that Elastic Transcoder adds to the bucket, including playlists and video files. Valid values include: <ul> <li> <code>READ</code>: The grantee can read the objects and metadata for objects that Elastic Transcoder adds to the Amazon S3 bucket.</li> <li> <code>READ_ACP</code>: The grantee can read the object ACL for objects that Elastic Transcoder adds to the Amazon S3 bucket. </li> <li> <code>WRITE_ACP</code>: The grantee can write the ACL for the objects that Elastic Transcoder adds to the Amazon S3 bucket.</li> <li> <code>FULL_CONTROL</code>: The grantee has <code>READ</code>, <code>READ_ACP</code>, and <code>WRITE_ACP</code> permissions for the objects that Elastic Transcoder adds to the Amazon S3 bucket.</li> </ul> </li> <li> <b>StorageClass</b>: The Amazon S3 storage class, <code>Standard</code> or <code>ReducedRedundancy</code>, that you want Elastic Transcoder to assign to the video files and playlists that it stores in your Amazon S3 bucket.</li> </ul>',
        'UpdatePipelineRequest$ThumbnailConfig' => '<p>The <code>ThumbnailConfig</code> object specifies several values, including the Amazon S3 bucket in which you want Elastic Transcoder to save thumbnail files, which users you want to have access to the files, the type of access you want users to have, and the storage class that you want to assign to the files.</p> <p>If you specify values for <code>ContentConfig</code>, you must also specify values for <code>ThumbnailConfig</code> even if you don\'t want to create thumbnails.</p> <p>If you specify values for <code>ContentConfig</code> and <code>ThumbnailConfig</code>, omit the <code>OutputBucket</code> object.</p> <ul> <li> <b>Bucket</b>: The Amazon S3 bucket in which you want Elastic Transcoder to save thumbnail files.</li> <li> <b>Permissions</b> (Optional]: The <code>Permissions</code> object specifies which users and/or predefined Amazon S3 groups you want to have access to thumbnail files, and the type of access you want them to have. You can grant permissions to a maximum of 30 users and/or predefined Amazon S3 groups.</li> <li> <b>GranteeType</b>: Specify the type of value that appears in the Grantee object: <ul> <li> <b>Canonical</b>: The value in the <code>Grantee</code> object is either the canonical user ID for an AWS account or an origin access identity for an Amazon CloudFront distribution. <important>A canonical user ID is not the same as an AWS account number.</important> </li> <li> <b>Email</b>: The value in the <code>Grantee</code> object is the registered email address of an AWS account. </li> <li> <b>Group</b>: The value in the <code>Grantee</code> object is one of the following predefined Amazon S3 groups: <code>AllUsers</code>, <code>AuthenticatedUsers</code>, or <code>LogDelivery</code>.</li> </ul> </li> <li> <b>Grantee</b>: The AWS user or group that you want to have access to thumbnail files. To identify the user or group, you can specify the canonical user ID for an AWS account, an origin access identity for a CloudFront distribution, the registered email address of an AWS account, or a predefined Amazon S3 group. </li> <li> <b>Access</b>: The permission that you want to give to the AWS user that you specified in <code>Grantee</code>. Permissions are granted on the thumbnail files that Elastic Transcoder adds to the bucket. Valid values include: <ul> <li> <code>READ</code>: The grantee can read the thumbnails and metadata for objects that Elastic Transcoder adds to the Amazon S3 bucket.</li> <li> <code>READ_ACP</code>: The grantee can read the object ACL for thumbnails that Elastic Transcoder adds to the Amazon S3 bucket. </li> <li> <code>WRITE_ACP</code>: The grantee can write the ACL for the thumbnails that Elastic Transcoder adds to the Amazon S3 bucket.</li> <li> <code>FULL_CONTROL</code>: The grantee has <code>READ</code>, <code>READ_ACP</code>, and <code>WRITE_ACP</code> permissions for the thumbnails that Elastic Transcoder adds to the Amazon S3 bucket. </li> </ul> </li> <li> <b>StorageClass</b>: The Amazon S3 storage class, <code>Standard</code> or <code>ReducedRedundancy</code>, that you want Elastic Transcoder to assign to the thumbnails that it stores in your Amazon S3 bucket.</li> </ul>',
      ],
    ],
    'PipelineStatus' => [
      'base' => NULL,
      'refs' => [
        'Pipeline$Status' => '<p>The current status of the pipeline:</p> <ul> <li> <code>Active</code>: The pipeline is processing jobs.</li> <li> <code>Paused</code>: The pipeline is not currently processing jobs.</li> </ul>',
        'UpdatePipelineStatusRequest$Status' => '<p>The desired status of the pipeline:</p> <ul> <li> <code>Active</code>: The pipeline is processing jobs.</li> <li> <code>Paused</code>: The pipeline is not currently processing jobs.</li> </ul>',
      ],
    ],
    'Pipelines' => [
      'base' => NULL,
      'refs' => [
        'ListPipelinesResponse$Pipelines' => '<p>An array of <code>Pipeline</code> objects.</p>',
      ],
    ],
    'PixelsOrPercent' => [
      'base' => NULL,
      'refs' => [
        'PresetWatermark$MaxWidth' => '<p>The maximum width of the watermark in one of the following formats: <ul> <li>number of pixels (px]: The minimum value is 16 pixels, and the maximum value is the value of <code>MaxWidth</code>.</li> <li>integer percentage (%]: The range of valid values is 0 to 100. Use the value of <code>Target</code> to specify whether you want Elastic Transcoder to include the black bars that are added by Elastic Transcoder, if any, in the calculation.</li> If you specify the value in pixels, it must be less than or equal to the value of <code>MaxWidth</code>.</ul></p>',
        'PresetWatermark$MaxHeight' => '<p>The maximum height of the watermark in one of the following formats: <ul> <li>number of pixels (px]: The minimum value is 16 pixels, and the maximum value is the value of <code>MaxHeight</code>.</li> <li>integer percentage (%]: The range of valid values is 0 to 100. Use the value of <code>Target</code> to specify whether you want Elastic Transcoder to include the black bars that are added by Elastic Transcoder, if any, in the calculation.</li> </ul> If you specify the value in pixels, it must be less than or equal to the value of <code>MaxHeight</code>.</p>',
        'PresetWatermark$HorizontalOffset' => '<p>The amount by which you want the horizontal position of the watermark to be offset from the position specified by HorizontalAlign: <ul> <li>number of pixels (px]: The minimum value is 0 pixels, and the maximum value is the value of MaxWidth.</li> <li>integer percentage (%]: The range of valid values is 0 to 100.</li> </ul>For example, if you specify Left for <code>HorizontalAlign</code> and 5px for <code>HorizontalOffset</code>, the left side of the watermark appears 5 pixels from the left border of the output video.</p> <p><code>HorizontalOffset</code> is only valid when the value of <code>HorizontalAlign</code> is <code>Left</code> or <code>Right</code>. If you specify an offset that causes the watermark to extend beyond the left or right border and Elastic Transcoder has not added black bars, the watermark is cropped. If Elastic Transcoder has added black bars, the watermark extends into the black bars. If the watermark extends beyond the black bars, it is cropped.</p> <p>Use the value of <code>Target</code> to specify whether you want to include the black bars that are added by Elastic Transcoder, if any, in the offset calculation.</p>',
        'PresetWatermark$VerticalOffset' => '<code>VerticalOffset</code> <p>The amount by which you want the vertical position of the watermark to be offset from the position specified by VerticalAlign:<ul> <li>number of pixels (px]: The minimum value is 0 pixels, and the maximum value is the value of <code>MaxHeight</code>.</li> <li>integer percentage (%]: The range of valid values is 0 to 100.</li> </ul> For example, if you specify <code>Top</code> for <code>VerticalAlign</code> and <code>5px</code> for <code>VerticalOffset</code>, the top of the watermark appears 5 pixels from the top border of the output video.</p> <p><code>VerticalOffset</code> is only valid when the value of VerticalAlign is Top or Bottom.</p> <p>If you specify an offset that causes the watermark to extend beyond the top or bottom border and Elastic Transcoder has not added black bars, the watermark is cropped. If Elastic Transcoder has added black bars, the watermark extends into the black bars. If the watermark extends beyond the black bars, it is cropped.</p> <p>Use the value of <code>Target</code> to specify whether you want Elastic Transcoder to include the black bars that are added by Elastic Transcoder, if any, in the offset calculation.</p>',
      ],
    ],
    'Playlist' => [
      'base' => '<p> Use Only for Fragmented MP4 or MPEG-TS Outputs. If you specify a preset for which the value of Container is <code>fmp4</code> (Fragmented MP4] or <code>ts</code> (MPEG-TS], Playlists contains information about the master playlists that you want Elastic Transcoder to create. We recommend that you create only one master playlist per output format. The maximum number of master playlists in a job is 30. </p>',
      'refs' => [
        'Playlists$member' => NULL,
      ],
    ],
    'PlaylistFormat' => [
      'base' => NULL,
      'refs' => [
        'CreateJobPlaylist$Format' => '<p>The format of the output playlist. Valid formats include <code>HLSv3</code>, <code>HLSv4</code>, and <code>Smooth</code>.</p>',
        'Playlist$Format' => '<p>The format of the output playlist. Valid formats include <code>HLSv3</code>, <code>HLSv4</code>, and <code>Smooth</code>.</p>',
      ],
    ],
    'Playlists' => [
      'base' => NULL,
      'refs' => [
        'Job$Playlists' => '<p><important>Outputs in Fragmented MP4 or MPEG-TS format only.</important>If you specify a preset in <code>PresetId</code> for which the value of <code>Container</code> is fmp4 (Fragmented MP4] or ts (MPEG-TS], <code>Playlists</code> contains information about the master playlists that you want Elastic Transcoder to create.</p> <p>The maximum number of master playlists in a job is 30. </p>',
      ],
    ],
    'Preset' => [
      'base' => '<p>Presets are templates that contain most of the settings for transcoding media files from one format to another. Elastic Transcoder includes some default presets for common formats, for example, several iPod and iPhone versions. You can also create your own presets for formats that aren\'t included among the default presets. You specify which preset you want to use when you create a job.</p>',
      'refs' => [
        'CreatePresetResponse$Preset' => '<p> A section of the response body that provides information about the preset that is created. </p>',
        'Presets$member' => NULL,
        'ReadPresetResponse$Preset' => '<p>A section of the response body that provides information about the preset.</p>',
      ],
    ],
    'PresetContainer' => [
      'base' => NULL,
      'refs' => [
        'CreatePresetRequest$Container' => '<p>The container type for the output file. Valid values include <code>fmp4</code>, <code>mp3</code>, <code>mp4</code>, <code>ogg</code>, <code>ts</code>, and <code>webm</code>.</p>',
        'Preset$Container' => '<p>The container type for the output file. Valid values include <code>fmp4</code>, <code>mp3</code>, <code>mp4</code>, <code>ogg</code>, <code>ts</code>, and <code>webm</code>.</p>',
      ],
    ],
    'PresetType' => [
      'base' => NULL,
      'refs' => [
        'Preset$Type' => '<p>Whether the preset is a default preset provided by Elastic Transcoder (<code>System</code>] or a preset that you have defined (<code>Custom</code>].</p>',
      ],
    ],
    'PresetWatermark' => [
      'base' => '<p>Settings for the size, location, and opacity of graphics that you want Elastic Transcoder to overlay over videos that are transcoded using this preset. You can specify settings for up to four watermarks. Watermarks appear in the specified size and location, and with the specified opacity for the duration of the transcoded video.</p> <p>Watermarks can be in .png or .jpg format. If you want to display a watermark that is not rectangular, use the .png format, which supports transparency.</p> <p>When you create a job that uses this preset, you specify the .png or .jpg graphics that you want Elastic Transcoder to include in the transcoded videos. You can specify fewer graphics in the job than you specify watermark settings in the preset, which allows you to use the same preset for up to four watermarks that have different dimensions.</p>',
      'refs' => [
        'PresetWatermarks$member' => NULL,
      ],
    ],
    'PresetWatermarkId' => [
      'base' => NULL,
      'refs' => [
        'JobWatermark$PresetWatermarkId' => '<p>The ID of the watermark settings that Elastic Transcoder uses to add watermarks to the video during transcoding. The settings are in the preset specified by Preset for the current output. In that preset, the value of Watermarks Id tells Elastic Transcoder which settings to use.</p>',
        'PresetWatermark$Id' => 'A unique identifier for the settings for one watermark. The value of <code>Id</code> can be up to 40 characters long.',
      ],
    ],
    'PresetWatermarks' => [
      'base' => NULL,
      'refs' => [
        'VideoParameters$Watermarks' => '<p>Settings for the size, location, and opacity of graphics that you want Elastic Transcoder to overlay over videos that are transcoded using this preset. You can specify settings for up to four watermarks. Watermarks appear in the specified size and location, and with the specified opacity for the duration of the transcoded video.</p> <p>Watermarks can be in .png or .jpg format. If you want to display a watermark that is not rectangular, use the .png format, which supports transparency.</p> <p>When you create a job that uses this preset, you specify the .png or .jpg graphics that you want Elastic Transcoder to include in the transcoded videos. You can specify fewer graphics in the job than you specify watermark settings in the preset, which allows you to use the same preset for up to four watermarks that have different dimensions.</p>',
      ],
    ],
    'Presets' => [
      'base' => NULL,
      'refs' => [
        'ListPresetsResponse$Presets' => '<p>An array of <code>Preset</code> objects.</p>',
      ],
    ],
    'ReadJobRequest' => [
      'base' => '<p>The <code>ReadJobRequest</code> structure.</p>',
      'refs' => [],
    ],
    'ReadJobResponse' => [
      'base' => '<p>The <code>ReadJobResponse</code> structure.</p>',
      'refs' => [],
    ],
    'ReadPipelineRequest' => [
      'base' => '<p>The <code>ReadPipelineRequest</code> structure.</p>',
      'refs' => [],
    ],
    'ReadPipelineResponse' => [
      'base' => '<p>The <code>ReadPipelineResponse</code> structure.</p>',
      'refs' => [],
    ],
    'ReadPresetRequest' => [
      'base' => '<p>The <code>ReadPresetRequest</code> structure.</p>',
      'refs' => [],
    ],
    'ReadPresetResponse' => [
      'base' => '<p>The <code>ReadPresetResponse</code> structure.</p>',
      'refs' => [],
    ],
    'Resolution' => [
      'base' => NULL,
      'refs' => [
        'JobInput$Resolution' => '<p>This value must be <code>auto</code>, which causes Elastic Transcoder to automatically detect the resolution of the input file.</p>',
        'VideoParameters$Resolution' => '<important> <p>To better control resolution and aspect ratio of output videos, we recommend that you use the values <code>MaxWidth</code>, <code>MaxHeight</code>, <code>SizingPolicy</code>, <code>PaddingPolicy</code>, and <code>DisplayAspectRatio</code> instead of <code>Resolution</code> and <code>AspectRatio</code>. The two groups of settings are mutually exclusive. Do not use them together.</p> </important> <p>The width and height of the video in the output file, in pixels. Valid values are <code>auto</code> and <i>width</i> x <i>height</i>:</p> <ul> <li> <code>auto</code>: Elastic Transcoder attempts to preserve the width and height of the input file, subject to the following rules.</li> <li> <code><i>width</i> x <i>height</i></code>: The width and height of the output video in pixels.</li> </ul> <p>Note the following about specifying the width and height:</p> <ul> <li>The width must be an even integer between 128 and 4096, inclusive.</li> <li>The height must be an even integer between 96 and 3072, inclusive.</li> <li>If you specify a resolution that is less than the resolution of the input file, Elastic Transcoder rescales the output file to the lower resolution.</li> <li>If you specify a resolution that is greater than the resolution of the input file, Elastic Transcoder rescales the output to the higher resolution.</li> <li>We recommend that you specify a resolution for which the product of width and height is less than or equal to the applicable value in the following list (<i>List - Max width x height value</i>]:</li> <ul> <li>1 - 25344</li> <li>1b - 25344</li> <li>1.1 - 101376</li> <li>1.2 - 101376</li> <li>1.3 - 101376</li> <li>2 - 101376</li> <li>2.1 - 202752</li> <li>2.2 - 404720</li> <li>3 - 404720</li> <li>3.1 - 921600</li> <li>3.2 - 1310720</li> <li>4 - 2097152</li> <li>4.1 - 2097152</li> </ul> </ul>',
      ],
    ],
    'ResourceInUseException' => [
      'base' => '<p> The resource you are attempting to change is in use. For example, you are attempting to delete a pipeline that is currently in use. </p>',
      'refs' => [],
    ],
    'ResourceNotFoundException' => [
      'base' => '<p> The requested resource does not exist or is not available. For example, the pipeline to which you\'re trying to add a job doesn\'t exist or is still being created. </p>',
      'refs' => [],
    ],
    'Role' => [
      'base' => NULL,
      'refs' => [
        'CreatePipelineRequest$Role' => '<p>The IAM Amazon Resource Name (ARN] for the role that you want Elastic Transcoder to use to create the pipeline.</p>',
        'Pipeline$Role' => '<p>The IAM Amazon Resource Name (ARN] for the role that Elastic Transcoder uses to transcode jobs for this pipeline.</p>',
        'TestRoleRequest$Role' => '<p>The IAM Amazon Resource Name (ARN] for the role that you want Elastic Transcoder to test.</p>',
        'UpdatePipelineRequest$Role' => '<p>The IAM Amazon Resource Name (ARN] for the role that you want Elastic Transcoder to use to transcode jobs for this pipeline.</p>',
      ],
    ],
    'Rotate' => [
      'base' => NULL,
      'refs' => [
        'CreateJobOutput$Rotate' => '<p> The number of degrees clockwise by which you want Elastic Transcoder to rotate the output relative to the input. Enter one of the following values: <code>auto</code>, <code>0</code>, <code>90</code>, <code>180</code>, <code>270</code>. The value <code>auto</code> generally works only if the file that you\'re transcoding contains rotation metadata. </p>',
        'JobOutput$Rotate' => '<p> The number of degrees clockwise by which you want Elastic Transcoder to rotate the output relative to the input. Enter one of the following values: </p> <p><code>auto</code>, <code>0</code>, <code>90</code>, <code>180</code>, <code>270</code></p> <p> The value <code>auto</code> generally works only if the file that you\'re transcoding contains rotation metadata.</p>',
      ],
    ],
    'SizingPolicy' => [
      'base' => NULL,
      'refs' => [
        'Artwork$SizingPolicy' => '<p>Specify one of the following values to control scaling of the output album art:</p> <p> <ul> <li> <code>Fit:</code> Elastic Transcoder scales the output art so it matches the value that you specified in either <code>MaxWidth</code> or <code>MaxHeight</code> without exceeding the other value.</li> <li> <code>Fill:</code> Elastic Transcoder scales the output art so it matches the value that you specified in either <code>MaxWidth</code> or <code>MaxHeight</code> and matches or exceeds the other value. Elastic Transcoder centers the output art and then crops it in the dimension (if any] that exceeds the maximum value. </li> <li> <code>Stretch:</code> Elastic Transcoder stretches the output art to match the values that you specified for <code>MaxWidth</code> and <code>MaxHeight</code>. If the relative proportions of the input art and the output art are different, the output art will be distorted.</li> <li> <code>Keep:</code> Elastic Transcoder does not scale the output art. If either dimension of the input art exceeds the values that you specified for <code>MaxWidth</code> and <code>MaxHeight</code>, Elastic Transcoder crops the output art.</li> <li> <code>ShrinkToFit:</code> Elastic Transcoder scales the output art down so that its dimensions match the values that you specified for at least one of <code>MaxWidth</code> and <code>MaxHeight</code> without exceeding either value. If you specify this option, Elastic Transcoder does not scale the art up.</li> <li> <code>ShrinkToFill</code> Elastic Transcoder scales the output art down so that its dimensions match the values that you specified for at least one of <code>MaxWidth</code> and <code>MaxHeight</code> without dropping below either value. If you specify this option, Elastic Transcoder does not scale the art up.</li> </ul> </p>',
        'Thumbnails$SizingPolicy' => '<p>Specify one of the following values to control scaling of thumbnails:</p> <p> <ul> <li> <code>Fit</code>: Elastic Transcoder scales thumbnails so they match the value that you specified in thumbnail MaxWidth or MaxHeight settings without exceeding the other value. </li> <li> <code>Fill</code>: Elastic Transcoder scales thumbnails so they match the value that you specified in thumbnail <code>MaxWidth</code> or <code>MaxHeight</code> settings and matches or exceeds the other value. Elastic Transcoder centers the image in thumbnails and then crops in the dimension (if any] that exceeds the maximum value.</li> <li> <code>Stretch</code>: Elastic Transcoder stretches thumbnails to match the values that you specified for thumbnail <code>MaxWidth</code> and <code>MaxHeight</code> settings. If the relative proportions of the input video and thumbnails are different, the thumbnails will be distorted.</li> <li> <code>Keep</code>: Elastic Transcoder does not scale thumbnails. If either dimension of the input video exceeds the values that you specified for thumbnail <code>MaxWidth</code> and <code>MaxHeight</code> settings, Elastic Transcoder crops the thumbnails.</li> <li> <code>ShrinkToFit</code>: Elastic Transcoder scales thumbnails down so that their dimensions match the values that you specified for at least one of thumbnail <code>MaxWidth</code> and <code>MaxHeight</code> without exceeding either value. If you specify this option, Elastic Transcoder does not scale thumbnails up.</li> <li> <code>ShrinkToFill</code>: Elastic Transcoder scales thumbnails down so that their dimensions match the values that you specified for at least one of <code>MaxWidth</code> and <code>MaxHeight</code> without dropping below either value. If you specify this option, Elastic Transcoder does not scale thumbnails up.</li> </ul> </p>',
        'VideoParameters$SizingPolicy' => '<p>Specify one of the following values to control scaling of the output video:</p> <p> <ul> <li> <code>Fit</code>: Elastic Transcoder scales the output video so it matches the value that you specified in either <code>MaxWidth</code> or <code>MaxHeight</code> without exceeding the other value.</li> <li> <code>Fill</code>: Elastic Transcoder scales the output video so it matches the value that you specified in either <code>MaxWidth</code> or <code>MaxHeight</code> and matches or exceeds the other value. Elastic Transcoder centers the output video and then crops it in the dimension (if any] that exceeds the maximum value.</li> <li> <code>Stretch</code>: Elastic Transcoder stretches the output video to match the values that you specified for <code>MaxWidth</code> and <code>MaxHeight</code>. If the relative proportions of the input video and the output video are different, the output video will be distorted.</li> <li> <code>Keep</code>: Elastic Transcoder does not scale the output video. If either dimension of the input video exceeds the values that you specified for <code>MaxWidth</code> and <code>MaxHeight</code>, Elastic Transcoder crops the output video.</li> <li> <code>ShrinkToFit</code>: Elastic Transcoder scales the output video down so that its dimensions match the values that you specified for at least one of <code>MaxWidth</code> and <code>MaxHeight</code> without exceeding either value. If you specify this option, Elastic Transcoder does not scale the video up.</li> <li> <code>ShrinkToFill</code>: Elastic Transcoder scales the output video down so that its dimensions match the values that you specified for at least one of <code>MaxWidth</code> and <code>MaxHeight</code> without dropping below either value. If you specify this option, Elastic Transcoder does not scale the video up.</li> </ul> </p>',
      ],
    ],
    'SnsTopic' => [
      'base' => NULL,
      'refs' => [
        'Notifications$Progressing' => '<p>The Amazon Simple Notification Service (Amazon SNS] topic that you want to notify when Elastic Transcoder has started to process the job.</p>',
        'Notifications$Completed' => '<p>The Amazon SNS topic that you want to notify when Elastic Transcoder has finished processing the job.</p>',
        'Notifications$Warning' => '<p>The Amazon SNS topic that you want to notify when Elastic Transcoder encounters a warning condition.</p>',
        'Notifications$Error' => '<p>The Amazon SNS topic that you want to notify when Elastic Transcoder encounters an error condition.</p>',
        'SnsTopics$member' => NULL,
      ],
    ],
    'SnsTopics' => [
      'base' => NULL,
      'refs' => [
        'TestRoleRequest$Topics' => '<p>The ARNs of one or more Amazon Simple Notification Service (Amazon SNS] topics that you want the action to send a test notification to.</p>',
      ],
    ],
    'StorageClass' => [
      'base' => NULL,
      'refs' => [
        'PipelineOutputConfig$StorageClass' => '<p> The Amazon S3 storage class, <code>Standard</code> or <code>ReducedRedundancy</code>, that you want Elastic Transcoder to assign to the video files and playlists that it stores in your Amazon S3 bucket. </p>',
      ],
    ],
    'String' => [
      'base' => NULL,
      'refs' => [
        'CreatePresetResponse$Warning' => '<p>If the preset settings don\'t comply with the standards for the video codec but Elastic Transcoder created the preset, this message explains the reason the preset settings don\'t meet the standard. Elastic Transcoder created the preset because the settings might produce acceptable output.</p>',
        'ExceptionMessages$member' => NULL,
        'Job$Arn' => '<p>The Amazon Resource Name (ARN] for the job.</p>',
        'JobOutput$Id' => '<p>A sequential counter, starting with 1, that identifies an output among the outputs from the current job. In the Output syntax, this value is always 1.</p>',
        'Pipeline$Arn' => '<p>The Amazon Resource Name (ARN] for the pipeline.</p>',
        'Preset$Arn' => '<p>The Amazon Resource Name (ARN] for the preset.</p>',
        'UserMetadata$key' => NULL,
        'UserMetadata$value' => NULL,
      ],
    ],
    'Success' => [
      'base' => NULL,
      'refs' => [
        'TestRoleResponse$Success' => '<p>If the operation is successful, this value is <code>true</code>; otherwise, the value is <code>false</code>.</p>',
      ],
    ],
    'Target' => [
      'base' => NULL,
      'refs' => [
        'PresetWatermark$Target' => '<p>A value that determines how Elastic Transcoder interprets values that you specified for <code>HorizontalOffset</code>, <code>VerticalOffset</code>, <code>MaxWidth</code>, and <code>MaxHeight</code>: <ul> <li> <b>Content</b>: <code>HorizontalOffset</code> and <code>VerticalOffset</code> values are calculated based on the borders of the video excluding black bars added by Elastic Transcoder, if any. In addition, <code>MaxWidth</code> and <code>MaxHeight</code>, if specified as a percentage, are calculated based on the borders of the video excluding black bars added by Elastic Transcoder, if any.</li> <li> <b>Frame</b>: <code>HorizontalOffset</code> and <code>VerticalOffset</code> values are calculated based on the borders of the video including black bars added by Elastic Transcoder, if any.</li> In addition, <code>MaxWidth</code> and <code>MaxHeight</code>, if specified as a percentage, are calculated based on the borders of the video including black bars added by Elastic Transcoder, if any.</ul></p>',
      ],
    ],
    'TestRoleRequest' => [
      'base' => '<p> The <code>TestRoleRequest</code> structure. </p>',
      'refs' => [],
    ],
    'TestRoleResponse' => [
      'base' => '<p>The <code>TestRoleResponse</code> structure.</p>',
      'refs' => [],
    ],
    'ThumbnailPattern' => [
      'base' => NULL,
      'refs' => [
        'CreateJobOutput$ThumbnailPattern' => '<p>Whether you want Elastic Transcoder to create thumbnails for your videos and, if so, how you want Elastic Transcoder to name the files.</p> <p>If you don\'t want Elastic Transcoder to create thumbnails, specify "".</p> <p> If you do want Elastic Transcoder to create thumbnails, specify the information that you want to include in the file name for each thumbnail. You can specify the following values in any sequence: </p> <ul> <li> <p> <b><code>{count}</code> (Required]</b>: If you want to create thumbnails, you must include <code>{count}</code> in the <code>ThumbnailPattern</code> object. Wherever you specify <code>{count}</code>, Elastic Transcoder adds a five-digit sequence number (beginning with <b>00001</b>] to thumbnail file names. The number indicates where a given thumbnail appears in the sequence of thumbnails for a transcoded file. </p> <important>If you specify a literal value and/or <code>{resolution}</code> but you omit <code>{count}</code>, Elastic Transcoder returns a validation error and does not create the job.</important> </li> <li> <p> <b>Literal values (Optional]</b>: You can specify literal values anywhere in the <code>ThumbnailPattern</code> object. For example, you can include them as a file name prefix or as a delimiter between <code>{resolution}</code> and <code>{count}</code>. </p> </li> <li> <p> <b><code>{resolution}</code> (Optional]</b>: If you want Elastic Transcoder to include the resolution in the file name, include <code>{resolution}</code> in the <code>ThumbnailPattern</code> object. </p> </li> </ul> <p>When creating thumbnails, Elastic Transcoder automatically saves the files in the format (.jpg or .png] that appears in the preset that you specified in the <code>PresetID</code> value of <code>CreateJobOutput</code>. Elastic Transcoder also appends the applicable file name extension.</p>',
        'JobOutput$ThumbnailPattern' => '<p>Whether you want Elastic Transcoder to create thumbnails for your videos and, if so, how you want Elastic Transcoder to name the files.</p> <p>If you don\'t want Elastic Transcoder to create thumbnails, specify "".</p> <p> If you do want Elastic Transcoder to create thumbnails, specify the information that you want to include in the file name for each thumbnail. You can specify the following values in any sequence: </p> <ul> <li> <p> <b><code>{count}</code> (Required]</b>: If you want to create thumbnails, you must include <code>{count}</code> in the <code>ThumbnailPattern</code> object. Wherever you specify <code>{count}</code>, Elastic Transcoder adds a five-digit sequence number (beginning with <b>00001</b>] to thumbnail file names. The number indicates where a given thumbnail appears in the sequence of thumbnails for a transcoded file. </p> <important>If you specify a literal value and/or <code>{resolution}</code> but you omit <code>{count}</code>, Elastic Transcoder returns a validation error and does not create the job.</important> </li> <li> <p> <b>Literal values (Optional]</b>: You can specify literal values anywhere in the <code>ThumbnailPattern</code> object. For example, you can include them as a file name prefix or as a delimiter between <code>{resolution}</code> and <code>{count}</code>. </p> </li> <li> <p> <b><code>{resolution}</code> (Optional]</b>: If you want Elastic Transcoder to include the resolution in the file name, include <code>{resolution}</code> in the <code>ThumbnailPattern</code> object. </p> </li> </ul> <p>When creating thumbnails, Elastic Transcoder automatically saves the files in the format (.jpg or .png] that appears in the preset that you specified in the <code>PresetID</code> value of <code>CreateJobOutput</code>. Elastic Transcoder also appends the applicable file name extension.</p>',
      ],
    ],
    'ThumbnailResolution' => [
      'base' => NULL,
      'refs' => [
        'Thumbnails$Resolution' => '<important> <p>To better control resolution and aspect ratio of thumbnails, we recommend that you use the values <code>MaxWidth</code>, <code>MaxHeight</code>, <code>SizingPolicy</code>, and <code>PaddingPolicy</code> instead of <code>Resolution</code> and <code>AspectRatio</code>. The two groups of settings are mutually exclusive. Do not use them together.</p> </important> <p>The width and height of thumbnail files in pixels. Specify a value in the format <code><i>width</i></code> x <code><i>height</i></code> where both values are even integers. The values cannot exceed the width and height that you specified in the <code>Video:Resolution</code> object.</p>',
      ],
    ],
    'Thumbnails' => [
      'base' => '<p>Thumbnails for videos.</p>',
      'refs' => [
        'CreatePresetRequest$Thumbnails' => '<p>A section of the request body that specifies the thumbnail parameters, if any.</p>',
        'Preset$Thumbnails' => '<p>A section of the response body that provides information about the thumbnail preset values, if any.</p>',
      ],
    ],
    'Time' => [
      'base' => NULL,
      'refs' => [
        'TimeSpan$StartTime' => '<p>The place in the input file where you want a clip to start. The format can be either HH:mm:ss.SSS (maximum value: 23:59:59.999; SSS is thousandths of a second] or sssss.SSS (maximum value: 86399.999]. If you don\'t specify a value, Elastic Transcoder starts at the beginning of the input file.</p>',
        'TimeSpan$Duration' => '<p>The duration of the clip. The format can be either HH:mm:ss.SSS (maximum value: 23:59:59.999; SSS is thousandths of a second] or sssss.SSS (maximum value: 86399.999]. If you don\'t specify a value, Elastic Transcoder creates an output file from StartTime to the end of the file.</p> <p>If you specify a value longer than the duration of the input file, Elastic Transcoder transcodes the file and returns a warning message.</p>',
      ],
    ],
    'TimeOffset' => [
      'base' => NULL,
      'refs' => [
        'CaptionSource$TimeOffset' => '<p>For clip generation or captions that do not start at the same time as the associated video file, the <code>TimeOffset</code> tells Elastic Transcoder how much of the video to encode before including captions.</p> <p>Specify the TimeOffset in the form [+-]SS.sss or [+-]HH:mm:SS.ss.</p>',
      ],
    ],
    'TimeSpan' => [
      'base' => '<p>Settings that determine when a clip begins and how long it lasts.</p>',
      'refs' => [
        'Clip$TimeSpan' => '<p>Settings that determine when a clip begins and how long it lasts.</p>',
      ],
    ],
    'UpdatePipelineNotificationsRequest' => [
      'base' => '<p>The <code>UpdatePipelineNotificationsRequest</code> structure.</p>',
      'refs' => [],
    ],
    'UpdatePipelineNotificationsResponse' => [
      'base' => '<p>The <code>UpdatePipelineNotificationsResponse</code> structure.</p>',
      'refs' => [],
    ],
    'UpdatePipelineRequest' => [
      'base' => '<p>The <code>UpdatePipelineRequest</code> structure.</p>',
      'refs' => [],
    ],
    'UpdatePipelineResponse' => [
      'base' => '<p>When you update a pipeline, Elastic Transcoder returns the values that you specified in the request. </p>',
      'refs' => [],
    ],
    'UpdatePipelineStatusRequest' => [
      'base' => '<p>The <code>UpdatePipelineStatusRequest</code> structure.</p>',
      'refs' => [],
    ],
    'UpdatePipelineStatusResponse' => [
      'base' => 'When you update status for a pipeline, Elastic Transcoder returns the values that you specified in the request.',
      'refs' => [],
    ],
    'UserMetadata' => [
      'base' => NULL,
      'refs' => [
        'CreateJobRequest$UserMetadata' => '<p>User-defined metadata that you want to associate with an Elastic Transcoder job. You specify metadata in <code>key/value</code> pairs, and you can add up to 10 <code>key/value</code> pairs per job. Elastic Transcoder does not guarantee that <code>key/value</code> pairs will be returned in the same order in which you specify them.</p>',
        'Job$UserMetadata' => '<p>User-defined metadata that you want to associate with an Elastic Transcoder job. You specify metadata in <code>key/value</code> pairs, and you can add up to 10 <code>key/value</code> pairs per job. Elastic Transcoder does not guarantee that <code>key/value</code> pairs will be returned in the same order in which you specify them.</p> <p>Metadata <code>keys</code> and <code>values</code> must use characters from the following list:</p> <ul> <li><p><code>0-9</code></p></li> <li><p><code>A-Z</code> and <code>a-z</code></p></li> <li><p><code>Space</code></p></li> <li><p>The following symbols: <code>_.:/=+-%@</code></p></li> </ul>',
      ],
    ],
    'ValidationException' => [
      'base' => '<p>One or more required parameter values were not provided in the request.</p>',
      'refs' => [],
    ],
    'VerticalAlign' => [
      'base' => NULL,
      'refs' => [
        'PresetWatermark$VerticalAlign' => '<p>The vertical position of the watermark unless you specify a non-zero value for <code>VerticalOffset</code>: <ul> <li> <b>Top</b>: The top edge of the watermark is aligned with the top border of the video.</li> <li> <b>Bottom</b>: The bottom edge of the watermark is aligned with the bottom border of the video.</li> <li> <b>Center</b>: The watermark is centered between the top and bottom borders.</li> </ul></p>',
      ],
    ],
    'VideoBitRate' => [
      'base' => NULL,
      'refs' => [
        'VideoParameters$BitRate' => '<p>The bit rate of the video stream in the output file, in kilobits/second. Valid values depend on the values of <code>Level</code> and <code>Profile</code>. If you specify <code>auto</code>, Elastic Transcoder uses the detected bit rate of the input source. If you specify a value other than <code>auto</code>, we recommend that you specify a value less than or equal to the maximum H.264-compliant value listed for your level and profile:</p> <p> <i>Level - Maximum video bit rate in kilobits/second (baseline and main Profile] : maximum video bit rate in kilobits/second (high Profile]</i> </p> <ul> <li>1 - 64 : 80</li> <li>1b - 128 : 160</li> <li>1.1 - 192 : 240</li> <li>1.2 - 384 : 480</li> <li>1.3 - 768 : 960</li> <li>2 - 2000 : 2500</li> <li>3 - 10000 : 12500</li> <li>3.1 - 14000 : 17500</li> <li>3.2 - 20000 : 25000</li> <li>4 - 20000 : 25000</li> <li>4.1 - 50000 : 62500</li> </ul>',
      ],
    ],
    'VideoCodec' => [
      'base' => NULL,
      'refs' => [
        'VideoParameters$Codec' => '<p>The video codec for the output file. Valid values include <code>H.264</code> and <code>vp8</code>. You can only specify <code>vp8</code> when the container type is <code>webm</code>.</p>',
      ],
    ],
    'VideoParameters' => [
      'base' => '<p>The <code>VideoParameters</code> structure.</p>',
      'refs' => [
        'CreatePresetRequest$Video' => '<p>A section of the request body that specifies the video parameters.</p>',
        'Preset$Video' => '<p>A section of the response body that provides information about the video preset values.</p>',
      ],
    ],
    'WatermarkKey' => [
      'base' => NULL,
      'refs' => [
        'Artwork$InputKey' => '<p>The name of the file to be used as album art. To determine which Amazon S3 bucket contains the specified file, Elastic Transcoder checks the pipeline specified by <code>PipelineId</code>; the <code>InputBucket</code> object in that pipeline identifies the bucket.</p> <p>If the file name includes a prefix, for example, <code>cooking/pie.jpg</code>, include the prefix in the key. If the file isn\'t in the specified bucket, Elastic Transcoder returns an error.</p>',
        'JobWatermark$InputKey' => '<p> The name of the .png or .jpg file that you want to use for the watermark. To determine which Amazon S3 bucket contains the specified file, Elastic Transcoder checks the pipeline specified by <code>Pipeline</code>; the <code>Input Bucket</code> object in that pipeline identifies the bucket.</p> <p> If the file name includes a prefix, for example, <b>logos/128x64.png</b>, include the prefix in the key. If the file isn\'t in the specified bucket, Elastic Transcoder returns an error. </p>',
      ],
    ],
    'WatermarkSizingPolicy' => [
      'base' => NULL,
      'refs' => [
        'PresetWatermark$SizingPolicy' => '<p>A value that controls scaling of the watermark: <ul> <li> <b>Fit</b>: Elastic Transcoder scales the watermark so it matches the value that you specified in either <code>MaxWidth</code> or <code>MaxHeight</code> without exceeding the other value.</li> <li> <b>Stretch</b>: Elastic Transcoder stretches the watermark to match the values that you specified for <code>MaxWidth</code> and <code>MaxHeight</code>. If the relative proportions of the watermark and the values of <code>MaxWidth</code> and <code>MaxHeight</code> are different, the watermark will be distorted.</li> <li> <b>ShrinkToFit</b>: Elastic Transcoder scales the watermark down so that its dimensions match the values that you specified for at least one of <code>MaxWidth</code> and <code>MaxHeight</code> without exceeding either value. If you specify this option, Elastic Transcoder does not scale the watermark up.</li> </ul> </p>',
      ],
    ],
    'ZeroTo255String' => [
      'base' => NULL,
      'refs' => [
        'Encryption$InitializationVector' => '<p>The series of random bits created by a random bit generator, unique for every encryption operation, that you used to encrypt your input files or that you want Elastic Transcoder to use to encrypt your output files. The initialization vector must be base64-encoded, and it must be exactly 16 bytes long before being base64-encoded.</p>',
        'HlsContentProtection$InitializationVector' => '<p>If Elastic Transcoder is generating your key for you, you must leave this field blank.</p> <p>The series of random bits created by a random bit generator, unique for every encryption operation, that you want Elastic Transcoder to use to encrypt your output files. The initialization vector must be base64-encoded, and it must be exactly 16 bytes before being base64-encoded.</p>',
      ],
    ],
    'ZeroTo512String' => [
      'base' => NULL,
      'refs' => [
        'HlsContentProtection$LicenseAcquisitionUrl' => '<p>The location of the license key required to decrypt your HLS playlist. The URL must be an absolute path, and is referenced in the URI attribute of the EXT-X-KEY metadata tag in the playlist file.</p>',
      ],
    ],
  ],
];
