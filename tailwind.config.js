module.exports = {
	content: [
		'**/*.html',
		'**/*.php',
		'**/*.js',
		'!wp-admin',
		'!wp-includes',
		'!node_modules',
		'!Prepros Export'
	],
	plugins: [require('@tailwindcss/typography')]
};
