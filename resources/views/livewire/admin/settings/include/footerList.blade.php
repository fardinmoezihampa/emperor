<div class="ibox-content mailbox-content">
    <div class="file-manager clearfix">
        <!-- List -->
        <a class="btn btn-primary d-block" href="compose-mail.html">تنظیمات فوتر</a>

        <ul class="category-list" wire:ignore>
            <li>
                <a {{Request::routeIs('admin.settings.footer.label')? 'style=color:#04a9f5;':''}}
                   href="{{route('admin.settings.footer.label')}}">
                    <i class="fa {{Request::routeIs('admin.settings.footer.label')? 'fa-circle':'fa-circle-o'}} text-navy"></i>
                    برچسب ها
                </a>
            </li>
            <li>
                <a {{Request::routeIs('admin.settings.footer.social')? 'style=color:#04a9f5;':''}}
                   href="{{route('admin.settings.footer.social')}}">
                    <i class="fa {{Request::routeIs('admin.settings.footer.social')? 'fa-circle':'fa-circle-o'}} text-navy"></i>
                    شبکه های اجتماعی
                </a>
            </li>
            <li><a href="#"> <i class="fa fa-circle-o text-navy"></i> اجتماعی</a></li>
            <li><a href="#"> <i class="fa fa-circle-o text-navy"></i> دیگر</a></li>
        </ul>
        <div class="clearfix"></div>
    </div>
</div>
