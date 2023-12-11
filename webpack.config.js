const path = require( 'path' )
const BrowserSyncPlugin = require( 'browser-sync-webpack-plugin' )
// @wordpress/scripts config.
const wordpressConfig = require( '@wordpress/scripts/config/webpack.config' )
// @wordpress/scripts helper which generates entry points from any '**/block.json' in 'src'.
const { getWebpackEntryPoints } = require( '@wordpress/scripts/utils/config' )

// See svgo.config.js to configure SVG manipulation.

module.exports = {
	...wordpressConfig,
	entry: {
		// Everything outputs to build/.
		...getWebpackEntryPoints(),
		// 'example/output': './path/to/dir/entrypoint.js',
		'css/burley': path.join( __dirname, '/src/css/burley.scss' ),
		'css/burley-admin': path.join( __dirname, '/src/css/burley-admin.scss' ),
		'css/burley-editor': path.join( __dirname, '/src/css/burley-editor.scss' ),
		'css/burley-dev': path.join( __dirname, '/src/css/burley-dev.scss' ),
		'js/burley': path.join( __dirname, '/src/js/burley' ),
	},
	plugins: [
		...wordpressConfig.plugins,
		new BrowserSyncPlugin( {
			proxy: 'localhost:6969', // Live WordPress site. Using IP breaks it.
			ui: { port: 3001 }, // BrowserSync UI.
			port: 3000, // Dev port on localhost.
			logLevel: 'debug',
			reload: false, // false = webpack handles reloads (not sure if this works with files option).
			browser: "google-chrome-stable",
			files: [
				'src/**',
				'classes/**',
				'patterns/**',
				'parts/**',
				'templates/**',
				'**/**.json'
			]
		} )
	]
}
