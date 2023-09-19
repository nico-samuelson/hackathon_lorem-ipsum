import {
    MenuFoldOutlined,
    MenuUnfoldOutlined,
    UploadOutlined,
    UserOutlined,
    VideoCameraOutlined,
  } from '@ant-design/icons';
import { Layout, Menu, Button, theme } from 'antd';
import React from 'react';
import { useState } from 'react';
import { Head } from '@inertiajs/react';
import { ConfigProvider } from "antd";
const { Header, Sider, Content } = Layout;

  const AdminLayout = ({children}) => {
    const [collapsed, setCollapsed] = useState(false);
    const {
      token: { colorBgContainer },
    } = theme.useToken();
    const style = {
        margin: 0,
        padding: 0,
    }
    return (
        <ConfigProvider
            theme={{
                token: {
                    // Seed Token
                    colorPrimary: '#00b96b',
                    colorSecondary: '#aaa',
                    borderRadius: 2,
                },
            }}
        >
            <Head>
                <style>
                {`
                    html, body {
                        margin: 0;
                        padding: 0;
                    }
                    .ant-layout-has-sider {
                        min-height: 100vh;
                    }
                `}
                </style>
            </Head>
            <Layout>
                <Sider trigger={null} collapsible collapsed={collapsed}>
                <div className="demo-logo-vertical" />
                <Menu
                    theme="dark"
                    mode="inline"
                    defaultSelectedKeys={['1']}
                    items={[
                    {
                        key: '1',
                        icon: <UserOutlined />,
                        label: 'nav 1',
                    },
                    {
                        key: '2',
                        icon: <VideoCameraOutlined />,
                        label: 'nav 2',
                    },
                    {
                        key: '3',
                        icon: <UploadOutlined />,
                        label: 'nav 3',
                    },
                    ]}
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
                    icon={collapsed ? <MenuUnfoldOutlined /> : <MenuFoldOutlined />}
                    onClick={() => setCollapsed(!collapsed)}
                    style={{
                        fontSize: '16px',
                        width: 64,
                        height: 64,
                    }}
                    />
                </Header>
                <Content
                    style={{
                    margin: '24px 16px',
                    padding: 24,
                    minHeight: 280,
                    background: colorBgContainer,
                    }}
                >
                    <Button type="secondary">Secondary</Button>
                    {children}
                </Content>
                </Layout>
            </Layout>
        </ConfigProvider>
    );
  };
  export default AdminLayout;