<?php

return [
    'alipay' => [
        'app_id'         => '2016092700610889',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAz5ug/QeYUEwnFLJ/nWc0RZMpeWcJ3O1yqJEaArHYmg0xaXa8/JlgZOWbEP62YsulDfNSEhYK5uybVmOFrBC4DFgBvZmWnDw2hWQt7hT8ulGJ0INeboIkJCnbEbMg1IwWEasvdhlSX1Oz04s388FwPXVnMD+zfZT51fHtTZVA5lTwRsClGcgOD1u7+G58H32PQ+vT9L387TGfoMsElIfIkuOp7cGh+H0QKxtvo91C7XgCf9RKxjcQNUrYFJE9ImQf9m/FUkpWPLZOqNIFhD6S1/v5TKczJ/zCL2+XCCMJLSRihjZx5sU23tbag39l9uPcxJbtRTivQV0J/yH7JWHpNQIDAQAB',
        'private_key'    => 'MIIEowIBAAKCAQEApFYQNU+Kie22OOdcjZSwpPzxU2uD8VFhLM90o2FUhtms1HLlOk46jOhyuA9kfsXKyKQzknJDj3yO/juxmoOw5JKIo16FhuCEg9pqmwGf8Iv2tt0MjqGyEXDVm6AePIbrycMqqqEefTGOqKxeDg2qP9odkFFPYMjtVjC1jlsxe15jDKyzEzj/TQxLct+w5pHoz1uEG2r9NL1ak1k7Wrmjql4MI+tfyehNvoX140emfn9jOLSU26muP5BMB6RlRbAvDX5K2RcuuAD9DKXzcSkxK/NiIT9EJSLwDtJ60VrYczPoCHaNYBeO1+nWp0o+tUZgePD7u8t0w+9/gQbl0uBwNwIDAQABAoIBAQCHvidJQdiXsekQ+9rxf96hieX1GBw2mxf/oaUgx2bAtNET84vxK2klt2P7MYu7Q7oLHccTspqnzSV4TuqXTSwywe9nss3s6UvMdgAU5bStR4+U4OZccqfZzDBFim8vY+skD7gQlWHP272RCj/ur87vS0WcTe2Zbp7M0RNG8YDf+3YHljAIFuj6jaO1nLMkTO3VfFodDGR7BALutC35J2Lleq9JbznRSHVPvCHcYrIlpWXn5vCgbVqyZ0TvBiv0S++XOqb4fZqUNJZuHIyofMLQ+6pRP6b2XhoVYdsE5zlQxQdJPMDf4DHAdtzf8ot7VAnuD9DX+KrTBocFRRiD7LCBAoGBANWsxMnV/VZFVX2oBGL4kfEdnz/RviNxYpl2RKNj0W0aLUaMwol+qaGSZLbNwAF4mF+jZvUwdRUowijKzdhAN9x33+jhbt+QnwC/p7sQaecDjbOVz+8H0d64nwEqiC8gjXCEy9VjUNIeyTAc9LF+s0l2BPGDUgJRppQ9FMXK3YchAoGBAMTjYXUykcU6HObg65ZpQZ/bE1RjXsboGLgAjMEja2VA29NodoAXWO9EQBwdicUo5jF6D2WeVUxqBFg6wImV/Sucp3/Pve9CjNPMWZmSsDKvKYD4vcRLGQ4kcVj9UyDo9JIjKqWxULP2QHOWEwbTLFKYrm+EVHjQKJ6jNz7LGwRXAoGACryEotOiyBvxwL+ZgNOWmbPwVYeXczZ2Stm7dy5DzqSbE8ls2PXJVjoB34GVHT3PAjc2rClEKM0EfII8N5p6dBR95ri1Fnyw0JvQtMCNYbM3AogLi6or7HIAY1GcyCltkfLKPy2fWP99AnLiBK0mGxHYC76ad01c/mPXUFzyJqECgYBYrclhjgtV99y4qKmzr2jdZUEJi1BO6o7noWfEPf3LNzFLwQtOmjV2Xxk5EJzS7p7vvfhdXrkwl7epPZ0m2yWSlRZkXN9BeooPg0UABK/TxE0/R8nBNcntMsDSwhbFBefSQoCc7IZa6BkTdo7PTiHyec5ncATT/X2uJflmEPj0NQKBgCjUO7GgPGKMI7VOX5ABF7/uUjHpJmb2IRZWqZLmjJDifCeVZhiOWslJPl+/U211ttSj7udVFSxbyYj3Q4qqAxhDCuSGMdh3JY/YCG/zYvxpPnfwR69hxydNEr1oTDxWyOgVm3hEzPiXj0exXuvaAmpvGMfwQh26poEKLX+EyPRa',
        'log'            => [
            'file' => storage_path('logs/alipay.log'),
        ],
    ],

    'wechat' => [
        'app_id'      => 'wx*******',   // 公众号 app id
        'mch_id'      => '14*****',  // 第一步获取到的商户号
        'key'         => '******', // 刚刚设置的 API 密钥
        'cert_client' => resource_path('wechat_pay/apiclient_cert.pem'),
        'cert_key'    => resource_path('wechat_pay/apiclient_key.pem'),
        'log'         => [
            'file' => storage_path('logs/wechat_pay.log'),
        ],
    ],
];
