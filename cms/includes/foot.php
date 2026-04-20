    </main><!-- /.adm-content -->
  </div><!-- /.adm-main -->
</div><!-- /.adm-wrap -->

<!-- TipTap (carregado apenas quando há editor) -->
<?php if (defined('USE_QUILL') && USE_QUILL): ?>
<style>
.tiptap-wrap { border: 1px solid rgba(255,255,255,0.12); border-radius: 6px; overflow: hidden; }
.tiptap-toolbar {
  display: flex; flex-wrap: wrap; gap: 2px; padding: 8px;
  background: rgba(255,255,255,0.04); border-bottom: 1px solid rgba(255,255,255,0.08);
}
.tiptap-toolbar button {
  background: none; border: none; color: #94a3b8; cursor: pointer;
  padding: 5px 8px; border-radius: 4px; font-size: 13px; font-family: inherit;
  line-height: 1; transition: all 0.15s;
}
.tiptap-toolbar button:hover { background: rgba(255,255,255,0.08); color: #e2e8f0; }
.tiptap-toolbar button.is-active { background: rgba(34,211,238,0.15); color: #22d3ee; }
.tiptap-toolbar .sep { width: 1px; background: rgba(255,255,255,0.1); margin: 2px 4px; }
.tiptap-body .ProseMirror {
  min-height: 380px; padding: 16px; outline: none;
  background: rgba(255,255,255,0.03); color: #e2e8f0;
  font-size: 14px; line-height: 1.7;
}
.tiptap-body .ProseMirror p { margin: 0 0 12px; }
.tiptap-body .ProseMirror h2 { font-size: 1.3rem; font-weight: 700; margin: 20px 0 8px; color: #f1f5f9; }
.tiptap-body .ProseMirror h3 { font-size: 1.1rem; font-weight: 600; margin: 16px 0 6px; color: #f1f5f9; }
.tiptap-body .ProseMirror ul, .tiptap-body .ProseMirror ol { padding-left: 24px; margin: 0 0 12px; }
.tiptap-body .ProseMirror li { margin-bottom: 4px; }
.tiptap-body .ProseMirror blockquote { border-left: 3px solid #22d3ee; padding-left: 16px; color: #94a3b8; margin: 0 0 12px; }
.tiptap-body .ProseMirror code { background: rgba(255,255,255,0.08); padding: 2px 6px; border-radius: 4px; font-size: 13px; }
.tiptap-body .ProseMirror pre { background: rgba(0,0,0,0.3); padding: 12px 16px; border-radius: 6px; margin: 0 0 12px; overflow-x: auto; }
.tiptap-body .ProseMirror pre code { background: none; padding: 0; }
.tiptap-body .ProseMirror a { color: #22d3ee; text-decoration: underline; }
.tiptap-body .ProseMirror p.is-editor-empty:first-child::before {
  content: attr(data-placeholder); color: #475569; pointer-events: none; float: left; height: 0;
}
</style>

<script type="module">
import { Editor } from 'https://esm.sh/@tiptap/core@2';
import StarterKit from 'https://esm.sh/@tiptap/starter-kit@2';
import Link from 'https://esm.sh/@tiptap/extension-link@2';
import Underline from 'https://esm.sh/@tiptap/extension-underline@2';
import Placeholder from 'https://esm.sh/@tiptap/extension-placeholder@2';

const existingContent = document.getElementById('content').value || '';

const editor = new Editor({
  element: document.querySelector('.tiptap-body'),
  extensions: [
    StarterKit,
    Underline,
    Link.configure({ openOnClick: false }),
    Placeholder.configure({ placeholder: 'Escreva o conteúdo do post aqui...' }),
  ],
  content: existingContent,
});

editor.on('selectionUpdate', updateToolbar);
editor.on('transaction', updateToolbar);

function updateToolbar() {
  document.querySelectorAll('.tiptap-toolbar button[data-action]').forEach(btn => {
    const action = btn.dataset.action;
    let active = false;
    if (action === 'bold')        active = editor.isActive('bold');
    if (action === 'italic')      active = editor.isActive('italic');
    if (action === 'underline')   active = editor.isActive('underline');
    if (action === 'strike')      active = editor.isActive('strike');
    if (action === 'h2')          active = editor.isActive('heading', { level: 2 });
    if (action === 'h3')          active = editor.isActive('heading', { level: 3 });
    if (action === 'blockquote')  active = editor.isActive('blockquote');
    if (action === 'code')        active = editor.isActive('code');
    if (action === 'codeblock')   active = editor.isActive('codeBlock');
    if (action === 'ul')          active = editor.isActive('bulletList');
    if (action === 'ol')          active = editor.isActive('orderedList');
    if (action === 'link')        active = editor.isActive('link');
    btn.classList.toggle('is-active', active);
  });
}

document.querySelectorAll('.tiptap-toolbar button[data-action]').forEach(btn => {
  btn.addEventListener('mousedown', e => {
    e.preventDefault();
    const action = btn.dataset.action;
    if (action === 'bold')        editor.chain().focus().toggleBold().run();
    if (action === 'italic')      editor.chain().focus().toggleItalic().run();
    if (action === 'underline')   editor.chain().focus().toggleUnderline().run();
    if (action === 'strike')      editor.chain().focus().toggleStrike().run();
    if (action === 'h2')          editor.chain().focus().toggleHeading({ level: 2 }).run();
    if (action === 'h3')          editor.chain().focus().toggleHeading({ level: 3 }).run();
    if (action === 'blockquote')  editor.chain().focus().toggleBlockquote().run();
    if (action === 'code')        editor.chain().focus().toggleCode().run();
    if (action === 'codeblock')   editor.chain().focus().toggleCodeBlock().run();
    if (action === 'ul')          editor.chain().focus().toggleBulletList().run();
    if (action === 'ol')          editor.chain().focus().toggleOrderedList().run();
    if (action === 'link') {
      const prev = editor.isActive('link') ? editor.getAttributes('link').href : '';
      const url  = prompt('URL do link:', prev);
      if (url === null) return;
      if (url === '') { editor.chain().focus().unsetLink().run(); return; }
      editor.chain().focus().setLink({ href: url, target: '_blank' }).run();
    }
    if (action === 'clear') editor.chain().focus().clearNodes().unsetAllMarks().run();
  });
});

document.querySelector('form').addEventListener('submit', () => {
  document.getElementById('content').value = editor.getHTML();
});
</script>
<?php endif; ?>

<script src="<?= CMS_URL ?>/assets/js/admin.js"></script>
</body>
</html>
