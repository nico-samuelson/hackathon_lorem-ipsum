import React, { useContext, useState } from "react";
import { ConfigProvider } from "antd";
import { Head } from "@inertiajs/react";

export default function MainLayout({ children }) {
    // const {isMobile} = useMobileContext()
    // console.log(isMobile)
    // window.onreisze = () => {
    //     setIsMobile(window.innerWidth < 768)
    // }

    return (
        <ConfigProvider
            theme={{
                token: {
                    // Seed Token
                    // colorPrimary: "#00b96b",
                    // colorSecondary: "#aaa",
                },
            }}
        >
            <Head>
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
            </Head>

            {/* <MobileContextProvider> */}
            {children}
            {/* </MobileContextProvider> */}
        </ConfigProvider>
    );
}
