import {
    MenuFoldOutlined,
    MailOutlined,
    CalendarOutlined,
    AppstoreOutlined,
    SettingOutlined,
    LinkOutlined,
    MenuUnfoldOutlined,
    UploadOutlined,
    UserOutlined,
    VideoCameraOutlined,
} from "@ant-design/icons";
import { Layout, Menu, Button, theme } from "antd";
import React from "react";
import { useState } from "react";
import { Head } from "@inertiajs/react";
import { ConfigProvider } from "antd";
import { Footer } from "antd/es/layout/layout";
const { Header, Sider, Content } = Layout;

const AdminLayout = ({ children }) => {
    const [collapsed, setCollapsed] = useState(false);
    const [isMobile, setIsMobile] = useState(window.innerWidth < 768)

    window.onresize = () => {
      window.innerWidth < 768 ? setIsMobile(true) : setIsMobile(false)
    }

    const {
        token: { colorBgContainer },
    } = theme.useToken();

    function getItem(label, key, icon, children) {
        return {
            key,
            icon,
            children,
            label,
        };
    }

    const items = [
        getItem("Navigation One", "1", <MailOutlined />),
        getItem("Navigation Two", "2", <CalendarOutlined />),
        getItem("Navigation Two", "sub1", <AppstoreOutlined />, [
            getItem("Option 3", "3"),
            getItem("Option 4", "4"),
            getItem("Submenu", "sub1-2", null, [
                getItem("Option 5", "5"),
                getItem("Option 6", "6"),
            ]),
        ]),
        getItem("Navigation Three", "sub2", <SettingOutlined />, [
            getItem("Option 7", "7"),
            getItem("Option 8", "8"),
            getItem("Option 9", "9"),
            getItem("Option 10", "10"),
        ]),
        getItem(
            <a href={route("home")} rel="noopener noreferrer">
                Ant Design
            </a>,
            "link",
            <LinkOutlined />
        ),
    ];

    return (
        <ConfigProvider
            theme={{
                token: {
                    // Seed Token
                    colorPrimary: "#00b96b",
                    colorSecondary: "#aaa",
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

            <Layout>
                <Sider
                    breakpoint="lg"
                    collapsedWidth={isMobile ? "0" : "75"}
                    trigger={null} 
                    collapsible 
                    collapsed={collapsed}
                >
                    <div className="demo-logo-vertical" />
                    <Menu
                        theme="dark"
                        mode="inline"
                        defaultSelectedKeys={items[0]}
                        items={items}
                    />
                </Sider>

                <Layout>
                    <Header
                        style={{
                            padding: 0,
                            background: colorBgContainer,
                        }}
                    >
                        <Button
                            type="text"
                            icon={
                                collapsed ? (
                                    <MenuUnfoldOutlined />
                                ) : (
                                    <MenuFoldOutlined />
                                )
                            }
                            onClick={() => setCollapsed(!collapsed)}
                            style={{
                                fontSize: "16px",
                                width: 64,
                                height: 64,
                            }}
                        />
                    </Header>
                    <Content
                        style={{
                            margin: "24px 16px 0",
                        }}
                    >
                        <div
                            style={{
                                padding: 24,
                                minHeight: 360,
                                background: colorBgContainer,
                            }}
                        >
                            {children}
                        </div>
                    </Content>
                </Layout>
            </Layout>
        </ConfigProvider>
    );
};
export default AdminLayout;
