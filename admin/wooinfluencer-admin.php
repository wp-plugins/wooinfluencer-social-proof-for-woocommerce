<?php
/**
 * Menu admin class.
 *
 * @since 1.0.0
 *
 * @package Woo_Influencer
 * @author  ShopitPress
 */
class WooInfluencer_Admin {

	/**
     * Primary class constructor.
     *
     * @since 1.0.0
     */
	public function __construct() {
		
        // Build the custom admin page for managing addons, themes and licenses.
        add_action( 'admin_menu',  array( $this, 'wooinfluencer_custom_admin_menu' ) );		  
        add_action( 'admin_menu',  array( $this, 'wooinfluencer_custom_submenu_page') );
	}
			
	/**
     * Registers the admin menu for managing the ShopitPress options.
     *
     * @since 1.0.0
     */
    public function wooinfluencer_custom_admin_menu() {
	  
            // Base 64 encoded SVG image.
        $icon_svg = 'data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiPz48c3ZnIHdpZHRoPSI1OTUuMjhwdCIgdmVyc2lvbj0iMS4xIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIGhlaWdodD0iODQxLjg5cHQiIHZpZXdCb3g9IjAgMCA1OTUuMjggODQxLjg5IiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayI+IDxkZWZzPiAgPGNsaXBQYXRoIGlkPSJDbGlwMCI+ICAgPHBhdGggZD0iTTAgMCBMNzMwLjQ0MiAwIEw3MzAuNDQyIDU2MS4zMDMgTDAgNTYxLjMwMyBMMCAwIFoiIHRyYW5zZm9ybT0idHJhbnNsYXRlKC0wLjg2OTYsIDU3LjYwOCkiLz4gIDwvY2xpcFBhdGg+ICA8Y2xpcFBhdGggaWQ9IkNsaXAxIj4gICA8cGF0aCBkPSJNMCAwIEw0MTEuMDAyIDAgTDQxMS4wMDIgMzcyLjQxNCBMMCAzNzIuNDE0IEwwIDAgWiIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoOC44NTY4LCAxNTEuOCkiLz4gIDwvY2xpcFBhdGg+ICA8Y2xpcFBhdGggaWQ9IkNsaXAyIj4gICA8cGF0aCBkPSJNMCAwIEwzODcuNTM3IDAgTDM4Ny41MzcgMTE2LjI2MSBMMCAxMTYuMjYxIEwwIDAgWiIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMzIuMzIyNCwgNDA3Ljk1MikiLz4gIDwvY2xpcFBhdGg+ICA8Y2xpcFBhdGggaWQ9IkNsaXAzIj4gICA8cGF0aCBkPSJNMCAwIEwxNjcuOTIxIDAgTDE2Ny45MjEgMzIwLjY2NSBMMCAzMjAuNjY1IEwwIDAgWiIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMjUxLjkzOCwgMTUxLjgpIi8+ICA8L2NsaXBQYXRoPiA8L2RlZnM+IDxnIGlkPSJCYWNrZ3JvdW5kIj4gIDxnIGlkPSJTaGFwZV8xXzFfIiBjbGlwLXBhdGg9InVybCgjQ2xpcDApIj4gICA8cGF0aCBzdHlsZT0iZmlsbDojZWVlZWVlOyBmaWxsLXJ1bGU6ZXZlbm9kZDtzdHJva2U6bm9uZTsiIGQ9Ik0xOTQuNjA2IDE1MC4wMDYgTDE0MC4zMTMgMTc2LjAxNCBMMCAzMS43MzA0IEwzMi42MjMyIDAgTDE5NC42MDYgMTUwLjAwNiBaIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgxMDAuMjY0LCA0MzMuMTYpIi8+ICAgPHBhdGggc3R5bGU9ImZpbGw6Izk5OTk5OTsgZmlsbC1ydWxlOmV2ZW5vZGQ7c3Ryb2tlOm5vbmU7IiBkPSJNMzUuNjM4NCAyLjc4ODggTDMyLjYyODggMCBMMCAzMS43MzA0IEwxNDAuMzE5IDE3Ni4wMTIgTDE1MS45MDYgMTcwLjQ2MSBMMTEuNTkwNCAyNi4xNzg0IEwzNS42Mzg0IDIuNzg4OCBaIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgxMDAuNDMxLCA0MzMuMDgyKSIvPiAgIDxwYXRoIHN0eWxlPSJmaWxsOiMyMzFmMjA7IGZpbGwtcnVsZTpldmVub2RkOyBmaWxsLW9wYWNpdHk6MC4xO3N0cm9rZTpub25lOyIgZD0iTTAgMzEuNzMwNCBMNDIuNzUyOCA3NS42OTYgQzYwLjg1MiA3Mi4wODk2IDc3LjkzMjggNjUuODcxMiA5MS4wMiA2MS4xNzYgQzkyLjg1NjggNjAuNTA0IDk0LjY5NzYgNTkuODQzMiA5Ni41NCA1OS4xOTYgTDMyLjYyMzIgMCBMMCAzMS43MzA0IFoiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDEwMC4yNjQsIDQzMy4xNikiLz4gICA8cGF0aCBzdHlsZT0iZmlsbDojOTk5OTk5OyBmaWxsLXJ1bGU6ZXZlbm9kZDtzdHJva2U6bm9uZTsiIGQ9Ik00My41OTQ0IDI2LjYxMDQgQzUxLjY0NTYgNDMuNDEyOCA1MC4yMTIgNjAuODQ1NiA0MC4zOTYgNjUuNTQ4OCBDMzAuNTggNzAuMjUyIDE2LjA5NzYgNjAuNDM3NiA4LjA0OTYgNDMuNjMzNiBDMCAyNi44MzI4IDEuNDM2IDkuMzk5MiAxMS4yNDk2IDQuNjk3NiBDMjEuMDY4IDAgMzUuNTUwNCA5LjgwOTYgNDMuNTk0NCAyNi42MTA0IFoiIHRyYW5zZm9ybT0idHJhbnNsYXRlKC0wLjg2OTYsIDQyOS45MDQpIi8+ICAgPHBhdGggc3R5bGU9ImZpbGw6I2VlZWVlZTsgZmlsbC1ydWxlOmV2ZW5vZGQ7c3Ryb2tlOm5vbmU7IiBkPSJNNzEuNjU0NCA2MC44NTEyIEwyOS4xNDI0IDgxLjIxMDQgTDAgMjAuMzY1NiBMNDIuNTExMiAwIEw3MS42NTQ0IDYwLjg1MTIgWiIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoNy4yNjcyLCA0MTUuNzMyKSIvPiAgIDxwYXRoIHN0eWxlPSJmaWxsOiMyMzFmMjA7IGZpbGwtcnVsZTpldmVub2RkOyBmaWxsLW9wYWNpdHk6MC4xO3N0cm9rZTpub25lOyIgZD0iTTYuODQ1NiAzNC42NTYgTDQ5LjM1NzYgMTQuMjk2OCBMNDIuNTEyOCAwIEwwIDIwLjM2NDggTDYuODQ1NiAzNC42NTYgWiIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMjkuNTY0LCA0NjIuMjg2KSIvPiAgIDxwYXRoIHN0eWxlPSJmaWxsOiM5OTk5OTk7IGZpbGwtcnVsZTpldmVub2RkO3N0cm9rZTpub25lOyIgZD0iTTExOS40OTYgNDEuNDU5MiBDMTMzLjQ1NyA3MC41OTI4IDEyMS4xNDYgMTA1LjU0MiA5Mi4wMDU2IDExOS40OTQgQzYyLjg2MDggMTMzLjQ1OCAyNy45MjA4IDEyMS4xNDIgMTMuOTYwOCA5Mi4wMDcyIEMwIDYyLjg2IDEyLjMxMTIgMjcuOTIxNiA0MS40NTUyIDEzLjk1OTIgQzcwLjYgMCAxMDUuNTQxIDEyLjMxMDQgMTE5LjQ5NiA0MS40NTkyIFoiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDI1Ny45NDksIDI1My45OSkiLz4gICA8cGF0aCBzdHlsZT0iZmlsbDojMjMxZjIwOyBmaWxsLXJ1bGU6ZXZlbm9kZDsgZmlsbC1vcGFjaXR5OjAuMTtzdHJva2U6bm9uZTsiIGQ9Ik03My4zNjggNjkuMzQ5NiBDNDcuMDcyIDgxLjk0MzIgMTYuMDY1NiA3My4xNDcyIDAgNDkuOTA1NiBDMC44NzEyIDUyLjg0NDggMS45NzY4IDU1Ljc0ODggMy4zNDMyIDU4LjYwMTYgQzE3LjMwMjQgODcuNzM2OCA1Mi4yNDMyIDEwMC4wNTIgODEuMzg4IDg2LjA4ODggQzExMC41MjkgNzIuMTM2OCAxMjIuODM5IDM3LjE4NjQgMTA4Ljg3OCA4LjA1MzYgQzEwNy41MTcgNS4yMDA4IDEwNS45NDIgMi41MTc2IDEwNC4yMDIgMCBDMTEyLjI0MyAyNy4wODQ4IDk5LjY1NzYgNTYuNzU1MiA3My4zNjggNjkuMzQ5NiBaIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgyNjguNTY2LCAyODcuMzk1KSIvPiAgIDxnIGlkPSJHcm91cDEiIGNsaXAtcGF0aD0idXJsKCNDbGlwMSkiPiAgICA8cGF0aCBzdHlsZT0iZmlsbDojZTdlN2U4OyBmaWxsLXJ1bGU6ZXZlbm9kZDtzdHJva2U6bm9uZTsiIGQ9Ik0wLjMyIDAuNjQ5NiBDMCAwIDAuNzY0IDEuNTg0OCAwLjMyIDAuNjQ5NiBMMC4zMiAwLjY0OTYgWiIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoNDEuNDczNiwgNDU2LjQyMikiLz4gICAgPHBhdGggc3R5bGU9ImZpbGw6I2Y2ZjZmNzsgZmlsbC1ydWxlOmV2ZW5vZGQ7c3Ryb2tlOm5vbmU7IiBkPSJNMjU2LjQ5OSAwIEMyNDQuNzM4IDE1LjcyNjQgMjM5LjM2NCAzNi44MTIgMjI5LjY0MyA1My4xOTIgQzIwMC4yNzggMTAzLjU4MiAxNTQuNzMzIDE0NC41OTkgMTAyLjQ0NSAxNzYuNDcxIEM2Ny4zOTQ0IDE5OC4xMjYgMCAyMzguODY2IDMyLjkzNjggMzA1LjI3MSBDNjQuMzQ5NiAzNzIuNDE0IDEzOC4yMDYgMzQ1LjA5MyAxNzYuOTg2IDMzMS4xNzcgQzIzNC40OTYgMzEwLjE0MiAyOTQuOTU4IDMwMC4wODcgMzUyLjY2OSAzMDguNTE4IEMzNzEuNTM2IDMxMS4xMjkgMzkxLjM3MiAzMjAuMDU4IDQxMS4wMDIgMzIwLjY2NiBMMjU2LjQ5OSAwIFoiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDguODU2OCwgMTUxLjgpIi8+ICAgPC9nPiAgIDxnIG9wYWNpdHk9IjAuMSIgaWQ9Ikdyb3VwMiIgY2xpcC1wYXRoPSJ1cmwoI0NsaXAyKSI+ICAgIDxwYXRoIHN0eWxlPSJmaWxsOiMyMzFmMjA7IGZpbGwtcnVsZTpldmVub2RkOyBmaWxsLW9wYWNpdHk6MC4xO3N0cm9rZTpub25lOyIgZD0iTTMxOC4wNzMgOC40MzUyIEMyNjAuMzYyIDAgMTk5LjkgMTAuMDYwOCAxNDIuMzkzIDMxLjA5NiBDMTA0LjU5NCA0NC42NTYgMzMuNDc2IDcwLjkzODQgMC44MTI4IDEwLjA4NCBDMCAyMS45NzQ0IDIuNDUwNCAzNC45NjI0IDkuNDcxMiA0OS4xMTg0IEM0MC44ODQgMTE2LjI2MSAxMTQuNzQxIDg4Ljk0IDE1My41MiA3NS4wMjQgQzIxMS4wMyA1My45ODk2IDI3MS40OTIgNDMuOTM0NCAzMjkuMjAzIDUyLjM2NTYgQzM0OC4wNyA1NC45NzYgMzY3LjkwNiA2My45MDQ4IDM4Ny41MzcgNjQuNTEyOCBMMzY1Ljg2IDE5LjUzNTIgQzM0OS43MTggMTYuOTc2OCAzMzMuNTY2IDEwLjU4IDMxOC4wNzMgOC40MzUyIFoiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDMyLjMyMjQsIDQwNy45NTIpIi8+ICAgPC9nPiAgIDxnIG9wYWNpdHk9IjAuMSIgaWQ9Ikdyb3VwMyIgY2xpcC1wYXRoPSJ1cmwoI0NsaXAzKSI+ICAgIDxwYXRoIHN0eWxlPSJmaWxsOiMyMzFmMjA7IGZpbGwtcnVsZTpldmVub2RkOyBmaWxsLW9wYWNpdHk6MC4xO3N0cm9rZTpub25lOyIgZD0iTTE2Ny45MjEgMzIwLjY2NSBMMTMuNDE3NiAwIEM3LjkwOCA3LjM2MzIgMy44MDcyIDE1LjkwNCAwIDI0LjU4NCBMMTQwLjMzNSAzMTUuODM2IEMxNDkuNDkzIDMxOC4yNyAxNTguNzMzIDMyMC4zNzkgMTY3LjkyMSAzMjAuNjY1IFoiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDI1MS45MzgsIDE1MS44KSIvPiAgIDwvZz4gICA8cGF0aCBzdHlsZT0iZmlsbDojZWVlZWVlOyBmaWxsLXJ1bGU6ZXZlbm9kZDtzdHJva2U6bm9uZTsiIGQ9Ik03OC4wODA4IDE3LjEzNjggQzc5LjI0MDggMTkuNTY2NCA3OC4yMTY4IDIyLjQ4IDc1Ljc4OCAyMy42Mzg0IEwxNC4yMjE2IDUzLjEzMDQgQzExLjc5MiA1NC4yOTI4IDguODgwOCA1My4yNjggNy43MTYgNTAuODM4NCBMMS4xNjI0IDM3LjE1NTIgQzAgMzQuNzI3MiAxLjAyOCAzMS44MTkyIDMuNDUzNiAzMC42NTI4IEw2NS4wMjQ4IDEuMTY1NiBDNjcuNDUwNCAwIDcwLjM2MzIgMS4wMzA0IDcxLjUyNTYgMy40NTY4IEw3OC4wODA4IDE3LjEzNjggWiIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMjE5LjExOCwgNTY0LjYxNykiLz4gICA8cGF0aCBzdHlsZT0iZmlsbDojMjMxZjIwOyBmaWxsLXJ1bGU6ZXZlbm9kZDsgZmlsbC1vcGFjaXR5OjAuMTtzdHJva2U6bm9uZTsiIGQ9Ik0xNi42NTM2IDI5LjI1MjggQzE0LjIyMjQgMzAuNDE2OCAxMS4zMTM2IDI5LjM4OCAxMC4xNDU2IDI2Ljk2MjQgTDMuOTQ1NiAxNC4wMTA0IEwzLjQ1MzYgMTQuMjQ4OCBDMS4wMjggMTUuNDE1MiAwIDE4LjMyMzIgMS4xNjI0IDIwLjc1MTIgTDcuNzE2IDM0LjQzNDQgQzguODgwOCAzNi44NjQgMTEuNzkyIDM3Ljg4ODggMTQuMjIxNiAzNi43MjY0IEw3NS43ODggNy4yMzQ0IEM3OC4yMTY4IDYuMDc2IDc5LjI0MDggMy4xNjI0IDc4LjA4MDggMC43MzI4IEw3Ny43MjY0IDAgTDE2LjY1MzYgMjkuMjUyOCBaIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgyMTkuMTE4LCA1ODEuMDIyKSIvPiAgIDxwYXRoIHN0eWxlPSJmaWxsOiM5OTk5OTk7IGZpbGwtcnVsZTpldmVub2RkO3N0cm9rZTpub25lOyIgZD0iTTcuMDU1MiAwIEM0LjgwMjQgMS4zOTI4IDIuNDQgMi44NTYgMCA0LjM5MjggTDcyLjg3NjggMTU2LjU0NiBDNzUuNTk2OCAxNTUuNTk5IDc4LjIxMiAxNTQuNjcgODAuNzA4IDE1My43NzYgTDcuMDU1MiAwIFoiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDk5LjYwMjQsIDMzMS4xNSkiLz4gICA8cGF0aCBzdHlsZT0iZmlsbDojOTk5OTk5OyBmaWxsLXJ1bGU6ZXZlbm9kZDtzdHJva2U6bm9uZTsiIGQ9Ik03LjA0NDggMCBDNC43OTQ0IDEuNCAyLjQ0IDIuODY4IDAgNC40MTEyIEw3NC41MzkyIDE2MC4wNDYgQzc3LjI2NDggMTU5LjEwNSA3OS44ODQgMTU4LjE3NiA4Mi4zNzg0IDE1Ny4yOTEgTDcuMDQ0OCAwIFoiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDExNC44NTgsIDMyMS42NTUpIi8+ICAgPHBhdGggc3R5bGU9ImZpbGw6I2VlZWVlZTsgZmlsbC1ydWxlOmV2ZW5vZGQ7c3Ryb2tlOm5vbmU7IiBkPSJNMTg1LjI4NiAzNDEuOTYyIEMxODYuNDQ2IDM0NC4zOTUgMTg1LjQyMiAzNDcuMzAyIDE4Mi45OTMgMzQ4LjQ2NSBMMTY5LjgwMiAzNTQuNzg2IEMxNjcuMzc0IDM1NS45NDYgMTY0LjQ2NCAzNTQuOTIyIDE2My4yOTYgMzUyLjQ5MSBMMS4xNjY0IDEzLjk4NCBDMCAxMS41NTIgMS4wMjk2IDguNjQxNiAzLjQ1OTIgNy40ODA4IEwxNi42NDU2IDEuMTYyNCBDMTkuMDc4NCAwIDIxLjk4OCAxLjAyMzIgMjMuMTUyIDMuNDUxMiBMMTg1LjI4NiAzNDEuOTYyIFoiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDI0OS43NTQsIDEzMy45ODEpIi8+ICAgPHBhdGggc3R5bGU9ImZpbGw6I2VlZWVlZTsgZmlsbC1ydWxlOmV2ZW5vZGQ7c3Ryb2tlOm5vbmU7IiBkPSJNMCAwIEMwIDAgMTMwLjI2NyAzNy4wOTA0IDg0Ljc2MTYgMTcwLjY4NCBDODQuNzYxNiAxNzAuNjg0IDEwNS43MDMgNjcuNTE2OCAwIDAgWiIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMzQ3Ljk5NywgMjA3LjA3NCkiLz4gICA8cGF0aCBzdHlsZT0iZmlsbDojZWVlZWVlOyBmaWxsLXJ1bGU6ZXZlbm9kZDtzdHJva2U6bm9uZTsiIGQ9Ik0wIDAgQzAgMCAxOTYuNjAyIDUxLjAzMDQgMTMyLjc3MyAyNzAuNTUgQzEzMi43NzMgMjcwLjU1IDI0MS4wMSA1Mi45MDU2IDAgMCBaIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgzNTAuMDk3LCAxNDMuODUyKSIvPiAgIDxwYXRoIHN0eWxlPSJmaWxsOiNlZWVlZWU7IGZpbGwtcnVsZTpldmVub2RkO3N0cm9rZTpub25lOyIgZD0iTTAgMCBDMCAwIDI3NS44MTQgNzEuNTkyOCAxODYuMjY5IDM3OS41NTQgQzE4Ni4yNjkgMzc5LjU1NCAzMzguMTE1IDc0LjIyNCAwIDAgWiIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMzkxLjQ1NywgNTcuNjA4KSIvPiAgPC9nPiA8L2c+PC9zdmc+';
 
       //add_menu_page( $page_title, $menu_title, $capability, $menu_slug, $function, $icon_url, $position );
        $this->hook = add_menu_page( 
            __( 'WooInfluencer', 'wooinfluencer-settings' ),
            __( 'WooInfluencer', 'wooinfluencer-settings' ),
            'manage_options', 
            'wooinfluencer-settings', 
            'settings_page_ui',
            $icon_svg             
        );

        // Load global assets if the hook is successful.
        if ( $this->hook ) {
            // Enqueue custom styles and scripts.
            add_action( 'admin_enqueue_scripts',  array( $this, 'wooinfluencer_admin_assets' ) );            
        } 
	}
    
    /**
     * Registers the admin sub-menu for managing the ShopitPress options.
     *
     * @since 1.0.0
     */
    public function wooinfluencer_custom_submenu_page() {
        
        add_submenu_page( 'wooinfluencer-settings', 'Plugin Support', 'Plugin Support', 'manage_options', 'http://shopitpress.com/community/', '' );
        add_submenu_page( 'wooinfluencer-settings', 'ShopitPress Extras', '<span style="color:#FFFF00">ShopitPress Extras</span>', 'manage_options', 'wooinfluencer-sip-extras', array($this,'wooinfluencer_admin_menu_ui') );
    }


    /**
     * Loads assets for the settings page.
     *
     * @since 1.0.0
     */
    public function wooinfluencer_admin_assets() {
        
        wp_register_style( 'woo_influencer_custom_wp_admin_css', esc_url( WOOINFLUENCER_URI .   '/admin/assets/css/admin.css', false, '1.0.0' ) );
        wp_enqueue_style( 'woo_influencer_custom_wp_admin_css' );
    }

    /**
     * Outputs the main UI for handling and managing addons, themes and licenses.
     *
     * @since 1.0.0
     */
    public function wooinfluencer_admin_menu_ui() {

        $tabs = array( 
            'plugins'     => __( 'Plugins' ), 
            'themes'      => __( 'Themes' )
        );
        
        // Required for foreach
        if( !empty( $tabs ) && !is_array( $tabs ) ) { return; }
        
        // $_GET['page']
        $get_page = filter_input( INPUT_GET, 'page', FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH );
        
        // $_GET['tab']
        $get_tab = filter_input( INPUT_GET, 'tab', FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH );
        
        // Set current tab
        $current = isset( $_GET['tab'] ) ? $get_tab : key( $tabs );
        

        // Build out the necessary HTML structure.
        // Tabs HTML structure
        $admin_tabs = '<div id="icon-edit-pages" class="icon32"><br /></div>';
        $admin_tabs .= '<h2 class="nav-tab-wrapper">';
        
        foreach( $tabs as $tab => $name ) {
            
            // Current tab class
            $class      = ( $tab == $current ) ? ' nav-tab-active' : '';
            
            // Tab links
            $admin_tabs .= '<a href="?page='. $get_page .'&tab='. $tab .'" class="nav-tab'. $class .'">'. $name .'</a>';
        }

        $admin_tabs .= '</h2><br />';
        
        //echo $admin_tabs; /** use for do_action */
        echo $admin_tabs; /** use for echo function() */
        
        if( isset($_GET['tab']) ) {
            if ($_GET['tab'] == "themes")
            	include("ui/themes.php");
            else 
                include("ui/plugin.php");
           } else 
                include("ui/plugin.php");
    } // END menu_ui()	
		
}

$wooinfluencer_admin = new WooInfluencer_Admin;
