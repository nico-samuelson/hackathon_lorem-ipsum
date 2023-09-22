import React, { useState } from 'react'
import { ConfigProvider } from 'antd'
import { Head } from '@inertiajs/react'
import MobileContextProvider from '../Context/MobileContext'
// import 

export default function MainLayout({ children }) {
    // const [isMobile, setIsMobile] = useState(window.innerWidth < 768)

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
                .ant-layout-has-sider {
                    min-height: 100vh;
                }
            `}
            </style>
        </Head>
        
        <MobileContextProvider>
            {children}
        </MobileContextProvider>
    </ConfigProvider>
  )
}
