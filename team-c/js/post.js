/* 変更中（ドラッグ中） */
$( 'input[type=range]' ).on( 'input', function () {
	var val = $(this).val();
} );

/* 変更後 */
$( 'input[type=range]' ).change( function () {
	var val = $(this).val();
} );