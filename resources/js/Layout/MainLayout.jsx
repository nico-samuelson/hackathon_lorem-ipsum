import React, { useContext, useState } from "react";
import { ConfigProvider } from "antd";
import { Head } from "@inertiajs/react";
import "../../css/tailwind.css";
import "../../css/app.css";

export default function MainLayout({ children }) {
    // const {isMobile} = useMobileContext()
    // console.log(isMobile)
    // window.onreisze = () => {
    //     setIsMobile(window.innerWidth < 768)
    // }

    return (
        <ConfigProvider>
            <Head>
                <link
                    rel="stylesheet"
                    href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/tw-elements.min.css"
                />

                <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/tw-elements.umd.min.js"></script>

                <style>
                    {`
                html, body {
                    margin: 0 !important;
                    padding: 0 !important;
                }
                .app {
                    min-height: 100vh;
                }
                .ant-layout-has-sider {
                    min-height: 100vh;
                }

                


            `}
                </style>
                <link rel="icon" type="image/x-icon" href="/logo.png"></link>
            </Head>

            {/* <MobileContextProvider> */}

            {children}
            {/* </MobileContextProvider> */}
        </ConfigProvider>
    );
}
